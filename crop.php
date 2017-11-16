<?php
	session_start();

 
	$dbname = "id3284881_cadastro";
	$usuario="id3284881_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


	include( 'm2brimagem.class.php' );
	$oImg = new m2brimagem( $_POST['img'] );
	if( $oImg->valida() == 'OK' )
	{
		$oImg->posicaoCrop( $_POST['x'], $_POST['y'] );
		$oImg->redimensiona( $_POST['w'], $_POST['h'], 'crop' );
		$oImg->grava( $_POST['img'] );
		copy($_POST["img"] , $_POST["destino"]);
		unlink($_POST["img"]);
	}
// }
exit;
?>