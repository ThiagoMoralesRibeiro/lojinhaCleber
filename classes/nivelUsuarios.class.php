<?php
include_once 'dataBaseConnection.class.php';
class NivelUsuarios {
    private $idNivelUsuarios;
    private $nivel;
    
    
    function __construct($nivel) {
        
        $this->setNivel($nivel);
        $this->saveQuery();
    }

    public function getIdNivelUsuarios(){
        return $this->idNivelUsuarios;
    }

    public function setIdNivelUsuarios($idNivelUsuarios){
        $this->idNivelUsuarios = $idNivelUsuarios;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function saveQuery() {
        $insert = new DataBaseConnection();
        $insert->getConn()->query(("INSERT INTO produtos (nivel) VALUES ('".$this->getNivel()."' )"));
    }
    

}
?>
