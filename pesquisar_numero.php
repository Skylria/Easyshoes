
<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar Número">
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
	$result_numero = "SELECT * FROM Cadastro_produtos WHERE numero LIKE '%$pesquisar%' LIMIT 100";
	$resultado_numero = mysqli_query($conn, $result_numero);
	
	while($rows_numero = mysqli_fetch_array($resultado_numero)){
		echo $rows_numero['numero']."<br>";
	}
?>
