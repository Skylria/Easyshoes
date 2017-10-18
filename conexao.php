<?php  
	$dbname = "id3284797_easyshoes";
	$usuario="id3284797_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$usuario = $_POST["usuario"];

  $sql ="INSERT INTO `cadastrar_funcionario`(`nome`, `cpf`, `email`, `senha`, `usuario`) VALUES (:nome, :cpf,:email,:senha,:usuario)";

	
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome);
	$stmt->bindParam( ':cpf', $cpf);
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':senha', $senha);
	$stmt->bindParam( ':usuario', $usuario);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	  
	
	header("location:login.php");
?>
