<?php
include_once 'dataBaseConnection.class.php';
class Categoria {
    private $idcategoria="";
    private $descricao="";
    
    function __construct( $descricao) {
        
        $this->setDescricao($descricao);
        $this->save();
    }

    public function getIdcategoria(){
        return $this->idcategoria;
    }

    public function setIdcategoria($idcategoria){
        $this->idcategoria = $idcategoria;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function save() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO categoria (descricao) VALUES ('".$this->getDescricao()."')"));
    }

}

?>