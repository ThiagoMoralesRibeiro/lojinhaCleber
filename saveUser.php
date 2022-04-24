<?php

include_once '../classes/usuarios.class.php';

$nome = $_POST['namePerson'];
$email =$_POST['email'];
$senha =$_POST['pwd'];
$cpf=$_POST['cpf'];
$endereco=$_POST['adress'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
$cep=$_POST['cep'];
$telefone=$_POST['telefone'];
$foto=$_POST['foto'];

$user = new Usuarios($email, $senha, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto);

$response = array('success'=>true);
echo json_encode($response);

