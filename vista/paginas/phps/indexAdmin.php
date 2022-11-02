<?php
session_start();
if (isset($_SESSION['usuarioValido'])) {
    

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../vendor/fontawesome-free-6.2.0-web/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cssIndex.css">
    <link rel="stylesheet" href="../../css/cssMenu.css">
    <title>indexAdmin</title>
</head>

<body>
    <div id="contenedorprincipal">
        <header id="encabezado">
            <h1> Universo Universal</h1>
        </header>
        <nav id="menu">
            <ul>
                <li><a href="../../paginas/inicio.html" target="ifcontenido" class="active fa fa-house">Inicio</a></li>
                <li><a href="../../paginas/acercade.html" target="ifcontenido" class="fa fa-folder-open">Acerca de</a></li>
                <li><a href="../../paginas/galeria.html" target="ifcontenido" class="fa fa-image">Galeria</a></li>
               
                <li id="mp">
                    <div class="dropdown">
                        <button class="dropbtn fa fa-ghost"> <?php 
                        echo''.$_SESSION['usuarioValido'];
                     ?> </button>
                        <div class="dropdown-content">
                        <a href="cerrarSesion.php" class="fa-solid fa-user" >Salir</a>
                        </div>
                      </div>
                </li>
            </ul>
            
        </nav>
        
        <section id="contenido">
            
            <iframe id="ifcontenido" name="ifcontenido" src="../../paginas/inicio.html" frameborder="0"></iframe>
          
        </section>
        <footer id="piepagina">
            <br>
            <h2><small>&copy; 2021 <b>slee ws</b> - Todos los Derechos Reservados.</small></h2>
            <br>
        </footer>
    </div>
</body>

</html>

<?php
}else{
    echo'debes iniciar incica session';
    echo'<br>';
    echo'
    <a href="../../../index.html">Iniciar Sesion</a>
    ';
}
?>

<!-- 

    checar

1.-alerttify 

2.-font awesone




-->