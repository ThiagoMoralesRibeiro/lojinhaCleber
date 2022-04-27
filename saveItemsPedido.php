<?php

include_once './classes/itemsPedido.class.php';

$ordem = $_POST['ordem'];
$qtdItem = $_POST['qtitem'];
$dtDevolucao = $_POST['dtDev'];
$motivoDevolucao = $_POST['motivDev'];

$itemsPedido = new ItensPedido($ordem, $qtdItem, $dtDevolucao, $motivoDevolucao);

$response = array('success'=>true);
echo json_encode($response);




?>