<?php
$servername = "localhost:3306";
$username = "root";
$password = "MAL5060M";
$dbname = "loginbd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("call loginbd.sp_EliminarUsario(:id);");
  $stmt->bindParam(':id', $id);
  
  // insert a row
  $id = $_POST["eli"];
  $stmt->execute();


  echo "se ah eliminado correcto";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>



