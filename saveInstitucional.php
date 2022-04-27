<?php
    include_once './classes/institucional.class.php';

    $nome =$_POST['namePerson'];
    $cpf_cnpj=$_POST['cpf'];
    $tipoPessoa=$_POST['tipoPessoa'];
    $endereco=$_POST['adress'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $uf=$_POST['UF'];
    $cep=$_POST['cep'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $logo=$_POST['logo'];

    $itemsPedido = new Institucional($nome,$cpf_cnpj,$tipoPessoa,$endereco,$bairro,$cidade,$uf,$cep, $telefone,$email,$logo);
    $response = array('success'=>true);
    echo json_encode($response);
?>
