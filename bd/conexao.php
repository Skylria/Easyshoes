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
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$sql = "INSERT INTO cadastro(U_NOME,U_CPF,U_TELEFONE,U_EMAIL,U_LOGIN,U_SENHA) 
		VALUES(:nome, :cpf, :telefone, :email, :login, :senha)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':cpf', $cpf );
	$stmt->bindParam( ':telefone',$telefone );
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':login', $login);
	$stmt->bindParam( ':senha', $senha);
	$result = $stmt->execute();
	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	
	header("location: ../login.php");
?>
