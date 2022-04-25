<?php

include_once './classes/produtos.class.php';

$fabricante = $_POST['fabr'];
$nome =$_POST['name'];
$marca =$_POST['marca'];
$modelo =$_POST['modelo'];
$descricao=$_POST['descricao'];
$uni=$_POST['uni'];
$largura=$_POST['largura'];
$altura=$_POST['altura'];
$prof=$_POST['prof'];
$peso=$_POST['peso'];
$cor=$_POST['color'];


$products = new Produtos($fabricante, $nome ,$marca,$modelo, $descricao, $uni, $largura, $altura, $prof, $peso,$cor);

$response = array('success'=>true);
echo json_encode($response);


?>