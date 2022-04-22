<?php
class nivelUsuarios {
    private $idNivelUsuarios;
    private $nivel;
    
    
    function __construct($idNivelUsuarios, $nivel) {
        $this->setIdNivelUsuarios($idNivelUsuarios);
        $this->setNivel($nivel);
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

    

}
?>
