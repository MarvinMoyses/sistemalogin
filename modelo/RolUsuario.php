<?php 
class RolUsuario{

    //atributos
    private $idRolUsuario;
    private $nombreRolUsuario;
    private $descripcion;

    //consructor
    public function __contructor($nombreRolUsuario,$descripcion){
        $this->nombreRolUsuario=$nombreRolUsuario;
        $this->descripcion=$descripcion;

    }

    //metodos set y get
    public function setNombreRolUsuario($nombreRolUsuario){
        $this ->$nombreRolUsuario=$nombreRolUsuario;
    }
    public function getNombreRolUsuari(){
        return $this->getNombreRolUsuari;
    }

    public function setDescripcio($descripcion){
        $this->$descripcion=$descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
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


<!-- hacer las otras dos clases que falta metiendo los constructores y atributos  -->

<!-- estudiar w3school estudiar php mysql database minimo 5 apartados  -->