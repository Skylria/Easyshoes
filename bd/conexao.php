<?php  
	include 'conexaogeral.php';
	$nome = htmlspecialchars($_POST["nome"]);
	$cpf = htmlspecialchars($_POST["cpf"]);
	$telefone = htmlspecialchars($_POST["telefone"]);
	$email = htmlspecialchars($_POST["email"]);
	$login = htmlspecialchars($_POST["login"]);
	$senha = htmlspecialchars($_POST["senha"]);
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
