
<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar Quantidade">
	<input type="submit" value="ENVIAR">
</form>
<?php
	$servidor = "localhost";
	$usuario = "id3284797_easyshoes";
	$senha = "123456";
	$dbname = "id3284797_login";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_quantidade = "SELECT * FROM Cadastro_produtos WHERE quantidade LIKE '%$pesquisar%' LIMIT 100";
	$resultado_quantidade = mysqli_query($conn, $result_quantidade);
	
	while($rows_quantidade = mysqli_fetch_array($resultado_quantidade)){
		echo $rows_quantidade['quantidade']."<br>";
	}
?>
