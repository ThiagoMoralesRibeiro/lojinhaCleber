<?php

include_once 'classes/produtos.class.php';

$fabr = $_POST['fabr'];
$name =$_POST['name'];
$marca =$_POST['marca'];
$descricao=$_POST['descricao'];
$uni=$_POST['uni'];
$largura=$_POST['largura'];
$altura=$_POST['altura'];
$prof=$_POST['prof'];
$peso=$_POST['peso'];
$color=$_POST['color'];


$user = new Usuarios($email, $senha, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto);



?>