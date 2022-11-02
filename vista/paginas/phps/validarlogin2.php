<?php

/* phpinfo(); */
echo "Bienvenido a PHP";

$nombreUsuario;
$claveUsuario;

$nombreUsuario=$_REQUEST['txtUser'];//sirve para atraer valores
$claveUsuario=$_REQUEST['txtcontra'];


if ($nombreUsuario=="marvin" && $claveUsuario=="1234") {

    session_start();
    $_SESSION['usuarioValidos']=$nombreUsuario;
    
    echo " Bienvenido estimado : ". $nombreUsuario;
    echo'
    <script>
    window.location.href="indexAdmin2.php";
    </script>
    ';
}else{
    echo "usuario y/o contraseña incorrecta";
}



?>