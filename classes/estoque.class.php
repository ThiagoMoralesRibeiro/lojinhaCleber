<?php

include_once 'dataBaseConnection.class.php';
class Estoque {
    private $idEstoque;
    private $idProduto;
    private $dtEntrada;
    private $quantidade;
    private $dtFabricacao;
    private $dtVencimento;
    private $nfCompra;
    private $precocompra;
    private $icmsCompra;
    private $precoVenda;
    private $qtdVendida;
    private $qtdOcorrencia;
    private $ocorrencia;
    
    
    function __construct( $dtEntrada, $quantidade, $dtFabricacao, $dtVencimento, $nfCompra, $precoCompra, $icmsCompra, $precoVenda, $qtdVendida, $qtdOcorrencia, $ocorrencia) {
        $this->setDtEntrada($dtEntrada);
        $this->setQuantidade($quantidade);
        $this->setDtFabricacao($dtFabricacao);
        $this->setDtVencimento($dtVencimento);
        $this->setNfCompra($nfCompra);
        $this->setPrecocompra($precoCompra);
        $this->setIcmsCompra($icmsCompra);
        $this->setQtdVendida($qtdVendida);
        $this->setQtdOcorrencia($qtdOcorrencia);
        $this->setOcorrencia($ocorrencia);
        $this->saveQuery();
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }

    public function getDtEntrada(){
        return $this->dtEntrada;
    }

    public function setDtEntrada($dtEntrada){
        $this->dtEntrada = $dtEntrada;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getDtFabricacao(){
        return $this->dtFabricacao;
    }

    public function setDtFabricacao($dtFabricacao){
        $this->dtFabricacao = $dtFabricacao;
    }

    public function getDtVencimento(){
        return $this->dtVencimento;
    }

    public function setDtVencimento($dtVencimento){
        $this->dtVencimento = $dtVencimento;
    }

    public function getNfCompra(){
        return $this->nfCompra;
    }

    public function setNfCompra($nfCompra){
        $this->nfCompra = $nfCompra;
    }

    public function getPrecocompra(){
        return $this->precocompra;
    }

    public function setPrecocompra($precocompra){
        $this->precocompra = $precocompra;
    }

    public function getIcmsCompra(){
        return $this->icmsCompra;
    }

    public function setIcmsCompra($icmsCompra){
        $this->icmsCompra = $icmsCompra;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda){
        $this->precoVenda = $precoVenda;
    }

    public function getQtdVendida(){
        return $this->qtdVendida;
    }

    public function setQtdVendida($qtdVendida){
        $this->qtdVendida = $qtdVendida;
    }

    public function getQtdOcorrencia(){
        return $this->qtdOcorrencia;
    }

    public function setQtdOcorrencia($qtdOcorrencia){
        $this->qtdOcorrencia = $qtdOcorrencia;
    }

    public function getOcorrencia(){
        return $this->ocorrencia;
    }

    public function setOcorrencia($ocorrencia){
        $this->ocorrencia = $ocorrencia;
    }

    public function saveQuery() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO estoque (dtEntrada, quantidade,	dtFabricacao,'dtVencimento,	nfCompra,	precoCompra,	icmsCompra,	precoVenda,	qtdVendida,	qtdOcorrencia,	ocorrencia	) VALUES ('".$this->getDtEntrada()."',  '".$this->getQuantidade()."', '".$this->getDtFabricacao()."','".$this->getDtVencimento()."','".$this->getNfCompra()."', '".$this->getPrecocompra()."', '".$this->getIcmsCompra()."', '".$this->getPrecoVenda()."', '".$this->getQtdVendida()."','".$this->getQtdOcorrencia()."', '".$this->getOcorrencia()."')"));
    }

}


?>
