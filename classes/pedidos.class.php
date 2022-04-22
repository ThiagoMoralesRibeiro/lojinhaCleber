<?php
include_once 'classes/dataBaseConnection.class.php';
class Pedidos {
    private $idPedido;
    private $idUsuario;
    private $dtPedido;
    private $dtPagamento;
    private $dtNotaFiscal;
    private $notaFiscal;
    private $dtEnvio;
    private $dtRecebimento;
    private $tipoFrete;
    private $rastreioFrete;
    private $entregaEndereco;
    private $entregaNumero;
    private $entregaComp1;
    private $entregaBairro;
    private $entregaCidade;
    private $entregaUF;
    private $entregaCEP;
    private $entregaTelefone;
    private $entregaRefer;
    private $valorTotal;
    private $qtdItens;
    private $dtDevolucao;
    private $motivoDevolucao;
    
    
    function __construct( $dtPedido,$dtPagamento,$dtNotaFiscal,$notaFiscal,$dtEnvio,$dtRecebimento,$tipoFrete,$rastreioFrete,$entregaEndereco,$entregaNumero,$entregaComp1,$entregaBairro,$entregaCidade,$entregaUF,$entregaCEP,$entregaTelefone,$entregaRefer,$valorTotal,$qtdItens,$dtDevolucao,$motivoDevolucao) {
        
        
        $this->setDtPedido($dtPedido);
        $this->setDtPagamento($dtPagamento);
        $this->setDtNotaFiscal($dtNotaFiscal);
        $this->setNotaFiscal($notaFiscal);
        $this->setDtEnvio($dtEnvio);
        $this->setDtRecebimento($dtRecebimento);
        $this->setTipoFrete($tipoFrete);
        $this->setRastreioFrete($rastreioFrete);
        $this->setEntregaEndereco($entregaEndereco);
        $this->setEntregaNumero($entregaNumero);
        $this->setEntregaComp1($entregaComp1);
        $this->setEntregaBairro($entregaBairro);
        $this->setEntregaCidade($entregaCidade);
        $this->setEntregaUF($entregaUF);
        $this->setEntregaCEP($entregaCEP);
        $this->setEntregaTelefone($entregaTelefone);
        $this->setMotivoDevolucao($motivoDevolucao);
        $this->setDtDevolucao($dtDevolucao);
        $this->setQtdItens($qtdItens);
        $this->setValorTotal($valorTotal);
        $this->setEntregaRefer($entregaRefer);
        $this->setEntregaTelefone($entregaTelefone);
        $this->saveQuery();
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getDtPedido(){
        return $this->dtPedido;
    }

    public function setDtPedido($dtPedido){
        $this->dtPedido = $dtPedido;
    }

    public function getDtPagamento(){
        return $this->dtPagamento;
    }

    public function setDtPagamento($dtPagamento){
        $this->dtPagamento = $dtPagamento;
    }

    public function getDtNotaFiscal(){
        return $this->dtNotaFiscal;
    }

    public function setDtNotaFiscal($dtNotaFiscal){
        $this->dtNotaFiscal = $dtNotaFiscal;
    }

    public function getNotaFiscal(){
        return $this->notaFiscal;
    }

    public function setNotaFiscal($notaFiscal){
        $this->notaFiscal = $notaFiscal;
    }

    public function getDtEnvio(){
        return $this->dtEnvio;
    }

    public function setDtEnvio($dtEnvio){
        $this->dtEnvio = $dtEnvio;
    }

    public function getDtRecebimento(){
        return $this->dtRecebimento;
    }

    public function setDtRecebimento($dtRecebimento){
        $this->dtRecebimento = $dtRecebimento;
    }

    public function getTipoFrete(){
        return $this->tipoFrete;
    }

    public function setTipoFrete($tipoFrete){
        $this->tipoFrete = $tipoFrete;
    }

    public function getRastreioFrete(){
        return $this->rastreioFrete;
    }

    public function setRastreioFrete($rastreioFrete){
        $this->rastreioFrete = $rastreioFrete;
    }

    public function getEntregaEndereco(){
        return $this->entregaEndereco;
    }

    public function setEntregaEndereco($entregaEndereco){
        $this->entregaEndereco = $entregaEndereco;
    }

    public function getEntregaNumero(){
        return $this->entregaNumero;
    }

    public function setEntregaNumero($entregaNumero){
        $this->entregaNumero = $entregaNumero;
    }

    public function getEntregaComp1(){
        return $this->entregaComp1;
    }

    public function setEntregaComp1($entregaComp1){
        $this->entregaComp1 = $entregaComp1;
    }

    public function getEntregaBairro(){
        return $this->entregaBairro;
    }

    public function setEntregaBairro($entregaBairro){
        $this->entregaBairro = $entregaBairro;
    }

    public function getEntregaCidade(){
        return $this->entregaCidade;
    }

    public function setEntregaCidade($entregaCidade){
        $this->entregaCidade = $entregaCidade;
    }

    public function getEntregaUF(){
        return $this->entregaUF;
    }

    public function setEntregaUF($entregaUF){
        $this->entregaUF = $entregaUF;
    }

    public function getEntregaCEP(){
        return $this->entregaCEP;
    }

    public function setEntregaCEP($entregaCEP){
        $this->entregaCEP = $entregaCEP;
    }

    public function getEntregaTelefone(){
        return $this->entregaTelefone;
    }

    public function setEntregaTelefone($entregaTelefone){
        $this->entregaTelefone = $entregaTelefone;
    }

    public function getEntregaRefer(){
        return $this->entregaRefer;
    }

    public function setEntregaRefer($entregaRefer){
        $this->entregaRefer = $entregaRefer;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }

    public function getQtdItens(){
        return $this->qtdItens;
    }

    public function setQtdItens($qtdItens){
        $this->qtdItens = $qtdItens;
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

    public function saveQuery() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO pedidos (	dtPedido,	dtPagamento,	dtNotaFiscal,	notaFiscal,	dtEnvio,	dtRecebimento,	tipoFrete, rastreioFrete,	entregaendereco,	entregaNumero,	entregaCompl,	entregaBairro,	entregaCidade,	entregaUF,	entregaCEP,	entregaTelefone,	entregaRefer,	valorTotal,	qtdItems,	dtDevolucao,	motivoDevolucao	) VALUES ('".$this->getDtPedido()."',  '".$this->getDtPagamento()."', '".$this->getDtNotaFiscal()."','".$this->getNotaFiscal()."','".$this->getDtEnvio()."', '".$this->getDtRecebimento()."', '".$this->getTipoFrete()."', '".$this->getRastreioFrete()."', '".$this->getEntregaEndereco()."','".$this->getEntregaNumero()."', '".$this->getEntregaComp1()."','".$this->getEntregaBairro()."','".$this->getEntregaCidade()."','".$this->getEntregaUF()."','".$this->getEntregaCep()."','".$this->getEntregaTelefone()."','".$this->getEntregaRefer()."','".$this->getValorTotal()."','".$this->getQtdItens()."','".$this->getDtDevolucao()."','".$this->getMotivoDevolucao()."')"));
    }

}

?>
