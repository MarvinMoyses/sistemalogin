<?php
class usuario {
private $idUsuario;
private $nombreUsuario;
private $apellidoPaterno;
private $apellidoMaterno;
private $emailUsuario;
private $telefonoUsuario;
private $estatusUsuario;


//constructor 
public function __contruct($idUsuario,$nombreUsuario,$apellidoPaterno,$apellidoMaterno,$emailUsuario, $telefonoUsuario,$estatusUsuario){
   $this-> $idUsuario= $idUsuario;
   $this-> $nombreUsuario=$nombreUsuario;
   $this-> $apellidoPaterno=$apellidoPaterno;
   $this-> $apellidoMaterno=$apellidoMaterno;
   $this-> $emailUsuario=$emailUsuario;
   $this-> $telefonoUsuario=$telefonoUsuario;
   $this-> $estatusUsuario= $estatusUsuario;
} 

public function getIdUsuario()
{
return $this->idUsuario;
}
public function setIdUsuario($idUsuario)
{
$this->idUsuario = $idUsuario;
return $this;
}

public function getNombreUsuario()
{
return $this->nombreUsuario;
}
public function setNombreUsuario($nombreUsuario)
{
$this->nombreUsuario = $nombreUsuario;
return $this;
}

public function getApellidoPaterno()
{
return $this->apellidoPaterno;
}
public function setApellidoPaterno($apellidoPaterno)
{
$this->apellidoPaterno = $apellidoPaterno;
return $this;
}

public function getApellidoMaterno()
{
return $this->apellidoMaterno;
}
public function setApellidoMaterno($apellidoMaterno)
{
$this->apellidoMaterno = $apellidoMaterno;
return $this;
}

public function getEmailUsuario()
{
return $this->emailUsuario;
}

public function setEmailUsuario($emailUsuario)
{
$this->emailUsuario = $emailUsuario;
return $this;
}

public function getTelefonoUsuario()
{
return $this->telefonoUsuario;
}
public function setTelefonoUsuario($telefonoUsuario)
{
$this->telefonoUsuario = $telefonoUsuario;
return $this;
}

public function getEstatusUsuario()
{
return $this->estatusUsuario;
}
public function setEstatusUsuario($estatusUsuario)
{
$this->estatusUsuario = $estatusUsuario;

return $this;
}
//metodos para el crud

public function insertarUsuario(){
    //aqui va el codigo para insertar
}
public function modificarUsuario(){
    //aqui va el codigo para insertar
}
public function eliminarUsuario(){
    //aqui va el codigo para insertar
}
public function consultarUsuario(){
    //aqui va el codigo para insertar
}
}
 




?>