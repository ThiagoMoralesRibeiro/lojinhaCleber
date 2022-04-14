<?php
class Categoria {
    private $idcategoria="";
    private $descricao="";
    
    function __construct($idcategoria, $descricao) {
        $this->setIdcategoria($idcategoria);
        $this->setDescricao($descricao);
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

}

?>