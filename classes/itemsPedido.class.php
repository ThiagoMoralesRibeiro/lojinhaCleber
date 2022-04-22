<?php

include_once 'dataBaseConnection.class.php';
class ItensPedido {
    private $idItemPedido;
    private $ordem;
    private $idPedido;
    private $idEstoque;
    private $qtdItem;
    private $dtDevolucao;
    private $motivoDevolucao;
    
    
    function __construct($ordem,$qtdItem,$dtDevolucao,$motivoDevolucao) {
        
        $this->setOrdem($ordem);
        
        
        $this->setQtdItem($qtdItem);
        $this->setDtDevolucao($dtDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
        $this->salvar();
    }

    public function getIdItemPedido(){
        return $this->idItemPedido;
    }

    public function setIdItemPedido($idItemPedido){
        $this->idItemPedido = $idItemPedido;
    }

    public function getOrdem(){
        return $this->ordem;
    }

    public function setOrdem($ordem){
        $this->ordem = $ordem;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
    }

    public function getQtdItem(){
        return $this->qtdItem;
    }

    public function setQtdItem($qtdItem){
        $this->qtdItem = $qtdItem;
    }

    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
    }

    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
    }

    public function salvar() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO itemspedido (	ordem,		qtdItem,	dtDevolucao,	motivoDevolucao	) VALUES ('".$this->getOrdem()."',  '".$this->getQtdItem()."', '".$this->getDtDevolucao()."','".$this->getMotivoDevolucao()."')"));
    }

}


?>
