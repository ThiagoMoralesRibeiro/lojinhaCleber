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

$consultaUsuarios =new DataBaseConnection();
$resultSelect = $consultaUsuarios->getConn()->query("SELECT * FROM usuarios");

while($line = mysqli_fetch_assoc($resultSelect)){
    $nameUser =  $line['nome'] ;
    $emailUser =   $line['email'] ;
    $cpfUser = $line['cpf'] ;
    $adressUser =$line['endereco'] ;
    $bairroUser= $line['bairro'] ;
    $cityUser= $line['cidade'] ;
    $ufUser= $line['uf'] ;
    $telUser= $line['telefone'] ;
}
?>
<table  border="2px" cellpadding="7px" cellspacing="2">
                <tr>
                    
                    <td>Nome</td>
                    <td>Email</td>
                    <td>CPF</td>
                    <td>Endereço</td>
                    <td>Bairro</td>
                    <td>Cidade</td>
                    <td>UF</td>
                    <td>Telefone</td>
                </tr>
<?php               
            echo"<tr>
                <td>$nameUser</td>
                <td>$emailUser</td>
                <td>$cpfUser</td>
                <td>$adressUser</td>
                <td>$bairroUser</td>
                <td>$cityUser</td>
                <td>$ufUser</td>
                <td>$telUser</td>
            </tr>";
                

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