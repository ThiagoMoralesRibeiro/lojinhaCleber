<?php

include_once 'classes/pedidos.class.php';

$dtPedido =$_POST['dtpedido'];
$dtPagamento=$_POST['dtpagl'];
$dtNotaFiscal=$_POST['dtnota'];
$notaFiscal=$_POST['nota'];
$dtEnvio=$_POST['dtpedido'];
$dtRecebimento=$_POST['daterec'];
$tipoFrete=$_POST['frete'];
$rastreioFrete=$_POST['rastr'];
$entregaEndereco=$_POST['entregaNumber'];
$entregaNumero=$_POST['entregaAddress'];
$entregaComp1=$_POST['entregaComp1'];
$entregaBairro=$_POST['entregaBairro'];
$entregaCidade=$_POST['city'];
$entregaUF=$_POST['entregaUF'];
$entregaCEP=$_POST['cep'];
$entregaTelefone=$_POST['telefone'];
$entregaRefer=$_POST['ref'];
$valorTotal=$_POST['total'];
$qtdItens=$_POST['qtdItens'];
$dtDevolucao=$_POST['dtDev'];
$motivoDevolucao=$_POST['motivoDev'];

$products = new Pedidos($dtPedido,$dtPagamento,$dtNotaFiscal,$notaFiscal,$dtEnvio,$dtRecebimento,$tipoFrete,$rastreioFrete,$entregaEndereco,$entregaNumero,$entregaComp1,$entregaBairro,$entregaCidade,$entregaUF,$entregaCEP,$entregaTelefone,$entregaRefer,$valorTotal,$qtdItens,$dtDevolucao,$motivoDevolucao);

?>







?>