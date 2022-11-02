
   

<?php 
session_start();

if (isset($_SESSION['usuarioValidos'])) {
   
    session_unset();//destruye las variables de session
    session_destroy();//destruye toda la session

   
    echo'
    <script>
    window.location.href="../../../index.html";
    </script>
    ';
} else {
    echo'NO has iniciado ssesion';
}
?>