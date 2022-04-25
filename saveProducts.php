<?php

include_once '../classes/produtos.class.php';

$fabricante = $_POST['fabr'];
$nome =$_POST['name'];
$modelo =$_POST['modelo'];
$marca =$_POST['marca'];
$descricao=$_POST['descricao'];
$uni=$_POST['uni'];
$largura=$_POST['largura'];
$altura=$_POST['altura'];
$prof=$_POST['prof'];
$peso=$_POST['peso'];
$cor=$_POST['color'];


$products = new Produtos($fabricante, $nome ,$modelo, $marca, $descricao, $uni, $largura, $altura, $prof, $peso,$cor)

?>