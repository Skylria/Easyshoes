<?php  
	include 'conexaogeral.php';

	$nome =  htmlspecialchars($_POST["nome_da_empresa"]);
	$cpf =  htmlspecialchars($_POST["cpf"]);
	$telefone =  htmlspecialchars($_POST["telefone_da_empresa"]);
	$cnpj =  htmlspecialchars($_POST["cnpj_da_empresa"]);
	$logradouro =  htmlspecialchars($_POST["logradouro_da_empresa"]);
	$email =  htmlspecialchars($_POST["email_da_empresa"]);
	$login =  htmlspecialchars($_POST["login_da_empresa"]);
	$senha =  htmlspecialchars($_POST["senha_da_empresa"]);

	$sql = "INSERT INTO usuarios(USER_NOME,USER_CPF,USER_TELEFONE,USER_CNPJ,USER_LOGRADOURO,USER_EMAIL,USER_LOGIN,USER_SENHA) 
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
