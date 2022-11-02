<?php 
include_once("RolUsuario.php");
include_once("usuario.php");
include_once ("conexionBD.php");

class Login {

private $idlogin;
private $nombreLogin;
private $claveLogin;
private $fechaCreacionLogin;
private $estatusLogin;
public  RolUsuario $objRolUsuario;
public  usuario $objUsuario;
public  conexionBD $objConexionBD;
private $stmt;

public function __construct($nombreLogin, $claveLogin){
    $this->nombreLogin=$nombreLogin;
    $this->claveLogin=$claveLogin;

}

//METODOS SET Y GET
public function getIdlogin()
{
    return $this->idlogin;
}

public function setIdlogin($idlogin)
{
    $this->idlogin = $idlogin;

    return $this;
}

public function getNombreLogin()
{
    return $this->nombreLogin;
}

public function setNombreLogin($nombreLogin)
{
    $this->nombreLogin = $nombreLogin;

    return $this;
}

public function getClaveLogin()
{
    return $this->claveLogin;
}

public function setClaveLogin($claveLogin)
{
    $this->claveLogin = $claveLogin;

    return $this;
}

public function getFechaCreacionLogin()
{
    return $this->fechaCreacionLogin;
}

public function setFechaCreacionLogin($fechaCreacionLogin)
{
    $this->fechaCreacionLogin = $fechaCreacionLogin;

    return $this;
}

public function getEstatusLogin()
{
    return $this->estatusLogin;
}

public function setEstatusLogin($estatusLogin)
{
    $this->estatusLogin = $estatusLogin;

    return $this;
}


public function validarLogin(){
    $objConexionBD = new ConexionBD('localhost:3306','root','MAL5060M','loginbd');
    try {
        if ($objConexionBD->conectarBD()) {
            $this->stmt=$objConexionBD->conn->prepare('call sp_ValidarLogin(:nombreLogin, :claveLogin)');
            $this->stmt->bindParam(':nombreLogin',$this->nombreLogin);
            $this->stmt->bindParam(':claveLogin',$this->claveLogin);

            $this->stmt->execute();

            /* $datosConsulta=$this->stmt->setFechMode(PDO::FETCH_ASSOC); */
            $datosConsulta=$this->stmt->fetchAll();
            session_start();

            foreach ($datosConsulta as $datos) {
                $_SESSION['usuarioValido']=$datos[2];
                $_SESSION['claveUsuario']=$datos[3];
            }

            if (isset($_SESSION['usuarioValido'])) {
                return true;
            }else{
                return false;
            }
        }
    } catch (PDOException $e) {
        echo "Error de sintaxis de SQL y/o Cpmexión".$e->getMessage();
    }
}
}

?>