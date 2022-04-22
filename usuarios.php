<?php

include_once 'classes/usuarios.class.php';

$nome = $_REQUEST['namePerson'];
$email =$_REQUEST['email'];
$senha =$_REQUEST['pwd'];
$cpf=$_REQUEST['cpf'];
$endereco=$_REQUEST['adress'];
$bairro=$_REQUEST['bairro'];
$cidade=$_REQUEST['cidade'];
$uf=$_REQUEST['uf'];
$cep=$_REQUEST['cep'];
$telefone=$_REQUEST['telefone'];
$foto=$_REQUEST['foto'];

//$user = new Usuarios($email, $senha, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto);

echo json_encode(
    array(
        "email" => $email,
        "nome" => $nome,
        "senha"=> $senha,
        "cpf"=>$cpf,
        "adress"=>$endereco,
        "bairro"=>$bairro,
        "cidade"=>$cidade,
        "uf"=>$uf,
        "cep"=>$cep,
        "telefone"=>$telefone,
        "foto"=>$foto
    )
); 


?>