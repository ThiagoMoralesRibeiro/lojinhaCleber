<?php

include_once './classes/nivelUsuarios.class.php';

$nivel = $_POST['userLevel'];

$nivelUser = new NivelUsuarios($nivel);
$response = array('success'=>true);
echo json_encode($response);





?>