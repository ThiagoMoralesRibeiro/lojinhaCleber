<?php

include_once './classes/categoria.class.php';

$descricao = $_POST['descricao'];


$categoria = new Categoria($descricao);

$response = array('success'=>true);
echo json_encode($response);




?>