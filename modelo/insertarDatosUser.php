<?php
$servername = "localhost:3306";
$username = "root";
$password = "MAL5060M";
$dbname = "loginbd";
//hacer un formulario para insertar con los datos requeridos y hacerlo desde la carpeta pagina vista hacer el formulario con las 4 funciones 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
/*   $stmt = $conn->prepare("insert into usuario(Nombre_Usuario, APaterno_Usuario, AMaterno_Usuario, Email_Usuario, Telefono_Usuario, Status_Usuario)
  VALUES (:nombre,:APaterno, :AMaterno, :email, :Telefono, :Status);"); */
  $stmt = $conn->prepare("call loginbd.sp_InsertarUsuario(:nombre,:APaterno, :AMaterno, :email, :Telefono, :Status);");
  $stmt->bindParam(':nombre', $nombre);
  $stmt->bindParam(':APaterno', $APaterno);
  $stmt->bindParam(':AMaterno', $AMaterno);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':Telefono', $Telefono);
  $stmt->bindParam(':Status', $Status);
  // insert a row
  $nombre = $_POST["inpNombre"];
  $APaterno = $_POST["inpAPaterno"];
  $AMaterno = $_POST["inpAMaterno"];
  $email = $_POST["inpEmail"];
  $Telefono =$_POST["inpTelefono"];
  $Status = $_POST["inpEstatus"];
  $stmt->execute();


  echo "se ah insertado correcto";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>