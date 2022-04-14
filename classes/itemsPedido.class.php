<?php
class ItensPedido {
    private $idItemPedido;
    private $ordem;
    private $idPedido;
    private $idEstoque;
    private $qtdItem;
    private $dtDevolucao;
    private $motivoDevolucao;
    
    
    function function_name($idItemPedido,$ordem,$idPedido,$idEstoque,$qtdItem,$dtDevolucao,$motivoDevolucao) {
        $this->setIdItemPedido($idItemPedido);
        $this->setOrdem($ordem);
        $this->setIdPedido($idPedido);
        $this->setIdEstoque($idEstoque);
        $this->setQtdItem($qtdItem);
        $this->setDtDevolucao($dtDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
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

}


?>
