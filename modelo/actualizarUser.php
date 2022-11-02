<?php
$servername = "localhost:3306";
$username = "root";
$password = "MAL5060M";
$dbname = "loginbd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $conn->prepare("call loginbd.sp_ActualizarUsuario(:id,:nombre,:APaterno, :AMaterno, :email, :Telefono, :Status);");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nombre', $nombre);
  $stmt->bindParam(':APaterno', $APaterno);
  $stmt->bindParam(':AMaterno', $AMaterno);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':Telefono', $Telefono);
  $stmt->bindParam(':Status', $Status);

  // insert a row
  $id = $_POST["inpID"];
  $nombre = $_POST["inpNombre"];
  $APaterno = $_POST["inpAPaterno"];
  $AMaterno = $_POST["inpAMaterno"];
  $email = $_POST["inpEmail"];
  $Telefono =$_POST["inpTelefono"];
  $Status = $_POST["inpEstatus"];
  $stmt->execute();


  echo "se ah actualizado correcto";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>


