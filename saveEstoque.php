<?php
    include_once '../classes/estoque.class.php';

    $dtEntrada =$_POST['dtEntrada']; 
    $quantidade =$_POST['qtd']; 
    $dtFabricacao=$_POST['dtFabr']; 
    $dtVencimento=$_POST['dtVenc']; 
    $nfCompra=$_POST['nf']; 
    $precoCompra=$_POST['buyPrice']; 
    $icmsCompra=$_POST['icms']; 
    $precoVenda=$_POST['sellPrice']; 
    $qtdVendida=$_POST['qtdVendida']; 
    $qtdOcorrencia=$_POST['qtdOcorrencia']; 
    $ocorrencia=$_POST['Ocor']; 

    $estoque = new Estoque($dtEntrada, $quantidade, $dtFabricacao, $dtVencimento, $nfCompra, $precoCompra, $icmsCompra, $precoVenda, $qtdVendida, $qtdOcorrencia, $ocorrencia);
    $response = array('success'=>true);
    echo json_encode($response);
?>
