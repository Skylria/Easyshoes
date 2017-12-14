<?php  
    $categoria = $_POST["categoria"];
	$cor = htmlspecialchars($_POST["cor"]);
	$marca= htmlspecialchars($_POST["marca"]);
	$numero = htmlspecialchars($_POST["numero"]);
	$setor = htmlspecialchars($_POST["setor"]);
	$quantidade = htmlspecialchars($_POST["quantidade"]);
	$preco = htmlspecialchars($_POST["preco"]);
	include 'conexaogeral.php';
	$sql ="INSERT INTO Cadastro_produtos(cor, marca, numero, setor, quantidade, preco, id_cat)
  VALUES (:cor, :marca, :numero, :setor, :quantidade, :preco, :categoria)";

	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':cor', $cor);
	$stmt->bindParam( ':marca', $marca);
	$stmt->bindParam( ':numero', $numero);
	$stmt->bindParam( ':setor', $setor);
	$stmt->bindParam( ':quantidade', $quantidade);
	$stmt->bindParam( ':preco', $preco);
	$stmt->bindParam( ':categoria', $categoria);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	  
	
	header("location: ../pagina_funcionario.php");
?>
