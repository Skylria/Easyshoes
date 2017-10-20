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

	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$usuario = $_POST["usuario"];
	$data = $_POST["data"];

  $sql ="INSERT INTO Cadastro( cpf, usuario, email, data_nascimento, senha, nome)
  VALUES (:cpf, :usuario, :email, :data_nascimento, :senha, :nome)";

	
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':cpf', $cpf);
	$stmt->bindParam( ':usuario', $usuario);
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':data_nascimento', $data);
	$stmt->bindParam( ':senha', $senha);
	$stmt->bindParam( ':nome', $nome);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	  
	
	header("location:login.php");
?>
