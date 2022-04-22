<?php

include_once 'classes/produtos.class.php';

$fabricante = $_POST['fabr'];
$name =$_POST['name'];
$modelo =$_POST['modelo'];
$marca =$_POST['marca'];
$descricao=$_POST['descricao'];
$uni=$_POST['uni'];
$largura=$_POST['largura'];
$altura=$_POST['altura'];
$prof=$_POST['prof'];
$peso=$_POST['peso'];
$cor=$_POST['color'];


$products = new Produtos($fabricante,$name,$modelo, $marca, $descricao, $uni, $largura, $altura, $prof, $peso,$cor)

?>