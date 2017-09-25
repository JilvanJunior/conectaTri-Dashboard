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

        $params['produtos'] = $products;

        $infos = $this->soap->consultarPreco($params)->consultarPrecoResult->Mercadorias->Mercadoria;
        $infosById = [];
        foreach($infos as $info) {
            $infosById[$idsByMartins[$info->CodigoMercadoria]] = $info;
        }

        return $infosById;
    }

    public function getMartinsCodeByEan(array $products)
    {
        $params = $this->getDefaultParams();

        $idsByEan = [];
        foreach($products as $product) {
            $idsByEan[$product->getEan()] = $product->getId();
        }

        $params['Mercadorias'] = array_keys($idsByEan);

        $result = $this->soap->consultarInfoMercadoriasPorEAN($params)->consultarInfoMercadoriasPorEANResult->MercadoriasInformacoes;

        $codes = [];
        foreach($result->MercadoriaInformacoes as $info) {
            $ean = $info->CODIGO_EAN;
            $idMartins = $info->CODIGO;
            $codes[$idsByEan[$ean]] = $idMartins;
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
            'cnpj' => '11822193000182',//$user->getCnpj(),
            'token' => ''
        ];

        return $params;
    }

    private function getExtraParams()
    {
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
