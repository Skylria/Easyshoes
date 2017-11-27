<?php
session_start();
$id = $_GET['id'];
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y"); 
$vendedor = $_SESSION['usuario'];
$hora = date("H:i:s");
	include 'conexaogeral.php';
	$produto = $conn->query("SELECT cor, marca, numero, setor, quantidade, preco FROM cadastro_produtos WHERE codigo = '".$id."'");
	$result = $produto->fetch(PDO::FETCH_ASSOC);
	$sql = "INSERT INTO vendas(v_data, v_hora, v_vendedor, p_cor, p_marca, p_numero, p_setor, p_quantidade, p_preco) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(1, $data );
	$stmt->bindParam(2, $hora );
	$stmt->bindParam(3,$vendedor );
	$stmt->bindParam(4, $result['cor']);
	$stmt->bindParam(5, $result['marca']);
	$stmt->bindParam(6, $result['numero']);
	$stmt->bindParam(7, $result['setor']);
	$stmt->bindParam(8, $result['quantidade']);
	$stmt->bindParam(9, $result['preco']);
	$re = $stmt->execute();
	$novaquantidade = $result['quantidade'] - 1;
    if ($novaquantidade > 0) {
	    $othersql = "UPDATE cadastro_produtos SET quantidade = ? WHERE codigo = ?";
		$statement = $conn->prepare($othersql);
		$statement->bindParam(1, $novaquantidade);
	    $statement->bindParam(2, $id);
	    $statement->execute();
	}
	else {
		$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "id3284881_cadastro";
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM cadastro_produtos WHERE codigo = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
	}
	header("location: ../pagina_funcionario.php");
?>