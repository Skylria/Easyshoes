
<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar marca">
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
	$result_marca = "SELECT * FROM Cadastro_produtos WHERE marca LIKE '%$pesquisar%' LIMIT 100";
	$resultado_marca = mysqli_query($conn, $result_marca);
	
	while($rows_marca = mysqli_fetch_array($resultado_marca)){
		echo $rows_marca['marca']."<br>";
	}
?>
