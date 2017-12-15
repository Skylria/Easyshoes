<?php  
	include 'conexaogeral.php';
	$nome = htmlspecialchars($_POST['nome']);
	$cpf =  htmlspecialchars($_POST['cpf']);
	$telefone =  htmlspecialchars($_POST['telefone']);
	$email =  htmlspecialchars($_POST['email']);
	$senha =  htmlspecialchars($_POST['senha']);
	$usuario =  htmlspecialchars($_POST['usuario']);
	$data =  htmlspecialchars($_POST['data']);
	$cargo = "NÃO DEFINIDO";

  $sql ="INSERT INTO cadastro( U_NOME, U_CPF, U_TELEFONE, U_EMAIL, U_NASCIMENTO, U_LOGIN, U_SENHA, U_CARGO)
  VALUES (?,?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam( 1, $nome);
	$stmt->bindParam( 2, $cpf);
	$stmt->bindParam( 3, $telefone);
	$stmt->bindParam( 4, $email);
	$stmt->bindParam( 5, $data);
	$stmt->bindParam( 6, $usuario);
	$stmt->bindParam( 7, $senha);
	$stmt->bindParam( 8, $cargo);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	header("location:../login.php");
?>
