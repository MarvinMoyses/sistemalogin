<?php 
 class conexionBd{
    //Atributos de la clase
    public $serverName;
    public $userName;
    public $userPassword;
    public $bdName;
    public $hostBd;
    public $dsn;

    public $conn;//es objeto de conexion

    //constructor
    public function __construct ($serverName, $userName,$userPassword,$bdName){
        $this->serverName=$serverName;
        $this->userName=$userName;
        $this->userPassword=$userPassword;
        $this->bdName=$bdName;
        /* $this->hostBd=$hostBd; */
    }
    //metodos set y get
    public function setServerName($serverName){
    $this->serverName=$serverName;
    }
    public function getServerName(){
        return $this->serverName;
    }

    //metodos de accion

    public function conectarBD(){
        $this->dsn="mysql:host=$this->serverName;dbname=$this->bdName";
        try {

        $this->conn= new PDO ($this->dsn,$this->userName,$this->userPassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset ($this->conn)){
           /*  echo'conexion exitosa....UwU'; */
            return true;
        }else {
            return false;
        }
        }
        catch(PDOException $e){

            echo'la conexion fallo'. $e->getMessage();
            return false;

        }
    }

}



?>