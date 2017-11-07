<?php  
	$dbname = "id3284881_cadastro";
	$usuario="id3284881_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$cor = $_POST["cor"];
	$marca= $_POST["marca"];
	$numero = $_POST["numero"];
	$setor = $_POST["setor"];
	$quantidade = $_POST["quantidade"];
	$preco = $_POST["preco"];

  $sql ="INSERT INTO Cadastro_produtos(cor, marca, numero, setor, quantidade, preco)
  VALUES (:cor, :marca, :numero, :setor, :quantidade, :preco)";

	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':cor', $cor);
	$stmt->bindParam( ':marca', $marca);
	$stmt->bindParam( ':numero', $numero);
	$stmt->bindParam( ':setor', $setor);
	$stmt->bindParam( ':quantidade', $quantidade);
	$stmt->bindParam( ':preco', $preco);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	  
	
	header("location: ../pagina_funcionario.php");
?>
