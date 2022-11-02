<?php 
/* 
include_once('../modelo/conexionBd.php');
$objConexionBd=new conexionBD('localhost:3306','root','MAL5060M','loginbd');
$objConexionBd->conectarBD(); */
/* phpinfo(); */
/* echo "Bienvenido a PHP";

$nombreUsuario;
$claveUsuario;

$nombreUsuario=$_REQUEST['txtUser'];//sirve para atraer valores
$claveUsuario=$_REQUEST['txtcontra'];


if ($nombreUsuario=="marvin" && $claveUsuario=="1234") {

    session_start();
    $_SESSION['usuarioValido']=$nombreUsuario;
    
    echo " Bienvenido estimado : ". $nombreUsuario;
    echo'
    <script>
    window.location.href="indexAdmin.php";
    </script>
    ';
}else{
    echo "usuario y/o contraseña incorrecta";
}
 */

include_once('../modelo/Login.php');

    $nombreUsuario=$_REQUEST["txtUser"];
    $claveUsuario=$_REQUEST["txtcontra"];

    $objLogin=new Login($nombreUsuario, $claveUsuario);

    if ($objLogin->validarLogin()) {
        // session_start();
        // $_SESSION['UsuarioValido']= $nombreUsuario;

        echo "Bienvenido " . $nombreUsuario;
        echo'
        <script>window.location.href="../vista/paginas/phps/indexAdmin.php"</script>';
    }else {
        echo "Usuario y/o contraseña incorrecta";
    }




?>