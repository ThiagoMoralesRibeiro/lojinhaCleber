<?php
class DBConnection {
    private $host ="";
    private $dbName="";
    private $passwd="";
    private $user="";
    private $conn="";
    private $port="";
    
    
    function __construct() {
        $this->setHost("localhost");
        $this->setDbName("lojinha");
        $this->setPasswd("12345");
        $this->setUser("root");
        $this->setPort("3306");
        $this->setConn(mysqli_connect($this->getHost(), $this->getUser(), $this->getPasswd(), $this->getDbName(), $this->getPort()));
        
       
        
        if (!$this->getConn()) {
            echo "Ocorreu um erro e o Número do erro é ". mysqli_connect_errno(). mysqli_connect_error();
            exit();
        }
    }
    
    
    
    

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getDbName(){
        return $this->dbName;
    }

    public function setDbName($dbName){
        $this->dbName = $dbName;
    }

    public function getPasswd(){
        return $this->passwd;
    }

    public function setPasswd($passwd){
        $this->passwd = $passwd;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
    }


    public function getPort(){
        return $this->port;
    }

    public function setPort($port){
        $this->port = $port;
    }

}




?>
