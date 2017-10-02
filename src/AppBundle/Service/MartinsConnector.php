<?php

namespace AppBundle\Service;

use AppBundle\Entity\Retailer;

class MartinsConnector
{
    private $soap;
    private $chave;
    private $user;
    private $acesso = null;

    /**
     * MartinsConnector constructor.
     * @param string $chave
     * @param string $url
     * @param Retailer $user
     */
    public function __construct($chave, $url, $user = null)
    {
        $this->soap = new \SoapClient($url.'?WSDL');
        $this->chave = $chave;
        $this->user = $user;
    }

    /**
     * @param string $chave
     * @return $this
     */
    public function setChave(string $chave)
    {
        $this->chave = $chave;
        return $this;
    }

    /**
     * @param Retailer $user
     * @return $this
     */
    public function setUser(Retailer $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function login()
    {
        //TODO change $params['email']
        $params = $this->getDefaultParams();
        $params['email'] = 'aline@martins.com.br';
        //$params['email'] = $this->user->getEmail();

        $acesso = $this->soap->logarUsuario($params)->logarUsuarioResult;
        $this->acesso = $acesso;

        return $acesso;
    }

    public function getProductInfoByMartinsCode($code) {
        $params = $this->getDefaultParams();
        $params["Mercadorias"] = [$code];

        return $this->soap->consultarInfoMercadoriasPorCodigo($params)->consultarInfoMercadoriasPorCodigoResult->MercadoriasInformacoes;
    }

    /**
     * @param array $quantitiesByProduct
     * @return array
     */
    public function getMartinsInfos(array $quantitiesByProduct)
    {
        $params = $this->getDefaultParams();
        $params += $this->getExtraParams();

        $products = [];
        $idsByMartins = [];
        foreach($quantitiesByProduct as $id => $quantityProduct) {
            $idMartins = $quantityProduct['idMartins'];
            $quantity = $quantityProduct['quantity'];

            if(!is_numeric($idMartins) || !is_numeric($quantity))
                continue;

            $idsByMartins[$idMartins] = $id;
            $products[$id] = [
                'CodigoMercadoria' => $idMartins,
                'Quantidade' => $quantity
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

    /**
     * @param array $quantitiesByProduct
     * @return array
     */
    public function saveMartinsPedido(array $quantitiesByProduct, $code)
    {
        $params = $this->getDefaultParams();
        $params += $this->getExtraParams();
        $params += $this->getFilialParams();

        $params['CondicaoPagamento'] = $code;

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

        $infos = $this->soap->cadastrarPedido($params)->cadastrarPedidoResult;

        return $infos;
    }

    /**
     * @param array $quantitiesByProduct
     * @return \stdClass
     */
    public function getMartinsEstoque(array $quantitiesByProduct)
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

        $infos = $this->soap->consultarEstoque($params)->consultarEstoqueResult->Estoque->Estoque;
        if(!is_array($infos))
            $infos = [$infos];
        $infosById = [];
        foreach($infos as $info) {
            $infosById[$idsByMartins[$info->CodigoMercadoria]] = $info;
        }

        return $infos;
    }

    /**
     * @param int $orderId
     * @return stdClass
     */
    public function trackMartinsPedido(int $orderId)
    {
        $params = $this->getDefaultParams();
        $params['pedidoId'] = $orderId;

        $infos = $this->soap->trankingPedido($params)->trankingPedidoResult;
        if(property_exists($infos, 'trackingData'))
            $infos = $infos->trackingData;

        return $infos;
    }

    /**
     * @param array $products
     * @return array
     */
    public function getProductInfoByEan(array $products)
    {
        $params = $this->getDefaultParams();

        $idsByEan = [];
        foreach($products as $product) {
            $ean = $product->getEan();
            if(!empty($ean) && is_numeric($ean))
                $idsByEan[$ean] = $product->getId();
        }
        if(empty($idsByEan))
            return [];

        $params['Mercadorias'] = array_keys($idsByEan);

        $consulta = $this->soap->consultarInfoMercadoriasPorEAN($params)->consultarInfoMercadoriasPorEANResult;
        if(!property_exists($consulta, "MercadoriasInformacoes")){
            return [];
        }

        $results = $consulta->MercadoriasInformacoes->MercadoriaInformacoes;
        if(!is_array($results))
            $results = [$results];

        $infos = [];
        foreach($results as $result) {
            $ean = $result->CODIGO_EAN;
            $infos[$idsByEan[$ean]] = $result;
        }

        return $infos;
    }

    /**
     * @param array $products
     * @return array
     */
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

    /**
     * @return array
     */
    public function getMartinsBoletos()
    {
        $params = $this->getDefaultParams();

        $boletos = $this->soap->consultaBoletosPendente($params)->consultaBoletosPendenteResult;
        if(property_exists($boletos, 'boletosPendentes')) {
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
        //TODO change cnpj
        $params = [
            'chpac' => $this->chave,
            'cnpj' => '11822193000182',
            //$this->user->getCnpj(),
            'token' => ''
        ];

        return $params;
    }

    /**
     * @return array
     */
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

    private function getFilialParams(){
        if(is_null($this->acesso))
            $this->login();

        $login = $this->acesso->Login;

        $params = [
            'FilialDeExpedicao' => $login->FilialExpedicao,
            'FilialDeFaturamento' => $login->FilialFaturamento
        ];

        return $params;
    }
}
