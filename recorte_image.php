<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body>
		
	
		
		<?php
	
			// memory limit (nem todo server aceita)
			ini_set("memory_limit","50M");
		
			
			// processa arquivo
			$imagem		= ( isset( $_FILES['imagem'] ) && is_array( $_FILES['imagem'] ) ) ? $_FILES['imagem'] : NULL;
			$tem_crop	= false;
			$img		= '';
			$nome = sha1(microtime());
			$ext = substr($imagem["name"], -4);
			$dir = "../uploads/".$nome.$ext;
			$dirTemp = "tmp_upload/".$nome.$ext;
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
						}
					}
				}
			}
		?>
		
		<?php if( $tem_crop === true ): ?>
		
				<div>
				<?php echo $img; ?>
				</div>
				
				<a href="aboutuser2.php"><button>Salvar</button></a>
			</div>
			
	

		<?php endif; ?>
		
	</body>
</html>