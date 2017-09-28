<?php

namespace AppBundle\Service;

use AppBundle\Entity\Retailer;

class MartinsConnector
{
    private $soap;
    private $chave;
    private $user;
    private $acesso = null;

    public function __construct($chave = null, $user = null)
    {
        $this->soap = new \SoapClient('http://service.martins.com.br/b2bservice.asmx?WSDL');
        $this->chave = $chave;
        $this->user = $user;
    }

    public function setChave(string $chave)
    {
        $this->chave = $chave;
        return $this;
    }

    public function setUser(Retailer $user)
    {
        $this->user = $user;
        return $this;
    }

    public function login()
    {
        $params = $this->getDefaultParams();
        $params['email'] = 'aline@martins.com.br';//$this->user->getEmail();

        $acesso = $this->soap->logarUsuario($params)->logarUsuarioResult;
        $this->acesso = $acesso;

        return $acesso;
    }

    public function getProductInfoByMartinsCode($code) {
        $params = $this->getDefaultParams();
        $params["Mercadorias"] = [$code];

        return $this->soap->consultarInfoMercadoriasPorCodigo($params)->consultarInfoMercadoriasPorCodigoResult->MercadoriasInformacoes;
    }

    public function getMartinsInfos(array $quantitiesByProduct)
    {
        $params = $this->getDefaultParams();
        $params += $this->getExtraParams();

        $products = [];
        $idsByMartins = [];
        foreach($quantitiesByProduct as $id => $quantityProduct) {
            $idMartins = $quantityProduct['idMartins'];
            $idsByMartins[$idMartins] = $id;
            $products[$id] = [
                'CodigoMercadoria' => $idMartins,
                'Quantidade' => $quantityProduct['quantity']
            ];
        }

        $params['produtos'] = array_values($products);

        $infos = $this->soap->consultarPreco($params)->consultarPrecoResult->Mercadorias->Mercadoria;
        if(!is_array($infos))
            $infos = [$infos];
        $infosById = [];
        foreach($infos as $info) {
            $infosById[$idsByMartins[$info->CodigoMercadoria]] = $info;
        }

        return $infosById;
    }

    public function getProductInfoByEan(array $products)
    {
        $params = $this->getDefaultParams();

        $idsByEan = [];
        foreach($products as $product) {
            $ean = $product->getEan();
            if(!empty($ean))
                $idsByEan[$ean] = $product->getId();
        }
        if(empty($idsByEan))
            return [];

        $params['Mercadorias'] = array_keys($idsByEan);

        $results = $this->soap->consultarInfoMercadoriasPorEAN($params)->consultarInfoMercadoriasPorEANResult->MercadoriasInformacoes->MercadoriaInformacoes;
        if(!is_array($results))
            $results = [$results];

        $infos = [];
        foreach($results as $result) {
            $ean = $result->CODIGO_EAN;
            $infos[$idsByEan[$ean]] = $result;
        }

        return $infos;
    }

    public function getMartinsCodeByEan(array $products)
    {
        $results = $this->getProductInfoByEan($products);

        $codes = [];
        foreach($results as $id => $result) {
            $idMartins = $result->CODIGO;
            $codes[$id] = $idMartins;
        }

        return $codes;
    }

    public function getMartinsBoletos()
    {
        $params = $this->getDefaultParams();

        $boletos = $this->soap->consultaBoletosPendente($params)->consultaBoletosPendenteResult->boletosPendentes;
        if(property_exists($boletos, 'titulosBoleto')) {
            if(is_array($boletos->titulosBoleto))
                $boletos = $boletos->titulosBoleto;
            else
                $boletos = [$boletos->titulosBoleto];
        } else
            $boletos = [];

        return $boletos;
    }

    private function getDefaultParams()
    {
        $params = [
            'chpac' => $this->chave,
            'cnpj' => '11822193000182',//$this->user->getCnpj(),
            'token' => ''
        ];

        return $params;
    }

    private function getExtraParams()
    {
        if(is_null($this->acesso))
            $this->login();

        $login = $this->acesso->Login;
        $condicoes = $login->CondicoesPagamento->CondPgto;
        if(is_array($condicoes))
            $condicao = $condicoes[0]->Codigo;
        else
            $condicao = $condicoes->Codigo;

        $params = [
            'CondicaoPagamento' => $condicao,
            'FilialExpedicao' => $login->FilialExpedicao,
            'FilialFaturamento' => $login->FilialFaturamento
        ];

        return $params;
    }
}
