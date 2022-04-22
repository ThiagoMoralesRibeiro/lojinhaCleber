<?php

include_once 'classes/dataBaseConnection.class.php';

class Produtos {
    
    private $idProduto;
    private $fabricante;
    private $nome;
    private $marca;
    private $modelo;
    private $idCategoria;
    private $descricao;
    private $unidadeMedida;
    private $largura;
    private $altura;
    private $profundidade;
    private $peso;
    private $cor;
    
    
    public function __construct ($fabricante,$nome,$marca,$modelo, $descricao,$unidadeMedida,$largura,$altura,$profundidade,$peso,$cor) {
        
        $this->setFabricante($fabricante);
        $this->setNome($nome);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->setLargura($largura);
        $this->setAltura($altura);
        $this->setProfundidade($profundidade);
        $this->setPeso($peso);
        $this->setCor($cor);
        $this->saveQuery();
        
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabricante){
        $this->fabricante = $fabricante;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getUnidadeMedida(){
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura = $largura;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getProfundidade(){
        return $this->profundidade;
    }

    public function setProfundidade($profundidade){
        $this->profundidade = $profundidade;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function saveQuery() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO produtos (fabricante, nome, marca, modelo, descricao, unidadeMedida, largura, altura, profundidade, peso, cor) VALUES ('".$this->getFabricante()."',  '".$this->getNome()."', '".$this->getMarca()."','".$this->getModelo()."','".$this->getDescricao()."', '".$this->getUnidadeMedida()."', '".$this->getLargura()."', '".$this->getAltura()."', '".$this->getProfundidade()."','".$this->getPeso()."', '".$this->getCor()."')"));
    }

}



?>
