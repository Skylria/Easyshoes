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
//selecionando dados da tabela
$sql = "SELECT * FROM tabela"
$query = mysql_query($sql);
while($sql = mysql_fetch_array($query)){
$usuario= $sql["usuario"];
$senha = $sql["senha"];
//onde $nome é a variavel que rerpresenta a coluna "nome" nessa
//mesma tabela.
echo "$usuario"; //exibindo o que foi achado na coluna "nome".
}
?>