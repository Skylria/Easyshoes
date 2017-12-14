<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y"); 
$hora = date("H:i:s");
$user = $_SESSION['usuario'];
$texto = $_POST['texto'];
	$host = "localhost";
    $dbname = "id3284797_login";
    $usuario="id3284797_easyshoes";
    $senha = "123456";
    try {
      	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
	
	$sql = "INSERT INTO mensagem(data, hora, usuario,texto) VALUES(?, ?, ?, ?)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(1, $data );
	$stmt->bindParam(2, $hora );
	$stmt->bindParam(3,$user );
	$stmt->bindParam(4, $texto);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	
header("location: ../mensagem_concluida.php");
?>
