<?php
class Institucional {
    private $idIntituicao;
    private $nome;
    private $cpf_cnpj;
    private $tipoPessoa;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $email;
    private $logo;
    
    
    
    function __construct($idIntituicao,$nome,$cpf_cnpj,$tipoPessoa,$endereco,$bairro,$cidade,$uf,$cep, $telefone,$email,$logo) {
        $this->setIdIntituicao($idIntituicao);
        $this->setNome($nome);
        $this->setCpf_cnpj($cpf_cnpj);
        $this->setTipoPessoa($tipoPessoa);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->setLogo($logo);
    }

    public function getIdIntituicao(){
        return $this->idIntituicao;
    }

    public function setIdIntituicao($idIntituicao){
        $this->idIntituicao = $idIntituicao;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function setCpf_cnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
    }

    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa){
        $this->tipoPessoa = $tipoPessoa;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
    }

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Form PHP</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        
</head>
<body>

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="usuario.php" method="post">
  			<div class="form-group">
      			<label for="dataEntrada">Data de Entrada</label>
      			<input type="date" class="form-control" id="dtEntrada"  name="dtEntrada">
    		</div>
  			
    		<div class="form-group">
      			<label for="qtd">Quantidade:</label>
      			<input type="number" class="form-control" id="qtd" me="qtd">
    		</div>
    		
    		<div class="form-group">
      			<label for="dataFabricacao">Data de Fabricação</label>
      			<input type="date" class="form-control" id="dtFabr"  name="dtFabr">
    		</div>
    		
    		<div class="form-group">
      			<label for="dataVenc">Data de Vencimento</label>
      			<input type="date" class="form-control" id="dtVenc"  name="dtVenc">
    		</div>
    		
    		<div class="form-group">
      			<label for="nf">Nf-Compra:</label>
      			<input type="text" class="form-control" id="nf"  name="nf">
    		</div>
    		
    		<div class="form-group">
      			<label for="buyPrice">Preço da Compra:</label>
      			<input type="text" class="form-control" id="buyPrice"  name="buyPrice">
    		</div>
    		
    		<div class="form-group">
      			<label for="icms">ICMS:</label>
      			<input type="text" class="form-control" id="icms" name="icms">
    		</div>
    		
    		<div class="form-group">
      			<label for="sellPrice">Preço de Venda:</label>
      			<input type="text" class="form-control" id="sellPrice" name="sellPrice">
    		</div>
    		
    		<div class="form-group">
      			<label for="qtdVendida">Quantidade Vendida:</label>
      			<input type="text" class="form-control" id="qtdVendida"  name="qtdVendida">
    		</div>
    		
    		<div class="form-group">
      			<label for="qtdOcorrencia">Quantidade de Ocorrências:</label>
      			<input type="text" class="form-control" id="qtdOcorrencia"  name="qtdOcorrencia">
    		</div>	

            <div class="form-group">
      			<label for="telefone">Ocorrencia:</label>
      			<input type="text" class="form-control" id="Ocorrencia" name="Ocorrencia">
    		</div>
    		
    		
    		<div class="form-group form-check">
      			<label class="form-check-label">
        			<input class="form-check-input" type="checkbox" name="remember"> Remember me
        		</label>
     	 	
    		</div>
    		<button type="submit" class="btn btn-dark">Submit</button>
  		</form>
	</div>

</body>
</html>