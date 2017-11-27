<?php  
	include 'bd/conexaogeral.php';
	$categoria = $_POST["categoria"];
	$cor = $_POST["cor"];
	$marca= $_POST["marca"];
	$numero = $_POST["numero"];
	$setor = $_POST["setor"];
	$quantidade = $_POST["quantidade"];
	$preco = $_POST["preco"];

  $sql ="INSERT INTO Cadastro_produtos(cor, marca, numero, setor, quantidade, preco, categoria)
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
