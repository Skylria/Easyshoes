<?php
$host = 'localhost';
$dbname = "id3284881_cadastro";
$usuario="root";
$senha = "";
try {
  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>