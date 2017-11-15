<?php
session_start();
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
}
$host = 'localhost';
	$dbname = "id3284881_cadastro";
	$usuario="id3284881_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
			// memory limit (nem todo server aceita)
			ini_set("memory_limit","50M");
		
			
			// processa arquivo
			$imagem		= ( isset( $_FILES['imagem'] ) && is_array( $_FILES['imagem'] ) ) ? $_FILES['imagem'] : NULL;
			$tem_crop	= false;
			$img		= '';
			$nome = sha1(microtime());
			$ext = substr($imagem["name"], -4);
			$nomext = $nome.$ext;
			//$dir = "../uploads/".$nomext;
			$dirTemp = "uploads/".$nomext;
			// valida a imagem enviada
			if( $imagem['tmp_name'] )
			{
				// armazena dimensões da imagem
				$imagesize = getimagesize( $imagem['tmp_name'] );
				
				if( $imagesize !== false )
				{
					// move a imagem para o servidor
					if( move_uploaded_file( $imagem['tmp_name'], $dirTemp ) )
					{
						include( 'm2brimagem.class.php' );
						
						$oImg = new m2brimagem( $dirTemp );
						// valida via m2brimagem
						if( $oImg->valida() == 'OK' )
						{
							// redimensiona (opcional, só pra evitar imagens muito grandes)
							$oImg->redimensiona( '570',"420", '' );
							// grava nova imagem
							$oImg->grava( $dirTemp );
							// novas dimensões da imagem
							$imagesize 	= getimagesize( $dirTemp );
							$img		= '<img src="'.$dirTemp.'" id="jcrop" '.$imagesize[3].' />';
							$preview	= '<img src="'.$dirTemp.'" id="preview" '.$imagesize[3].' />';
							$tem_crop 	= true;
							$comparador = $_SESSION['usuario'];
                            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
                            $update = mysqli_query($strcon, "UPDATE cadastro SET U_Foto = '$nomext' WHERE U_LOGIN = '$comparador'");
                            
						}
					}
				}
			}
			header ('location:../aboutuser.php');
		?>
