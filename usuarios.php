<?php

include_once 'classes/usuarios.class.php';

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

$consultaUsuarios =new DataBaseConnection();
$resultSelect =$consultaUsuarios->getConn()->query("SELECT * FROM usuarios");

while($line = mysqli_fetch_assoc($resultSelect)){
    echo  $line['nome'] . "<br>";
    echo  $line['email'] . "<br>";
    echo  $line['cpf'] . "<br>";
    echo  $line['endereco'] . "<br>";
    echo  $line['bairro'] . "<br>";
    echo  $line['cidade'] . "<br>";
    echo  $line['uf'] . "<br>";
    echo  $line['telefone'] . "<br>";
}
/*echo json_encode(
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
); */


?>