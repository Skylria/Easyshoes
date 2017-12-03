
<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar preço">
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
	$result_preco = "SELECT * FROM Cadastro_produtos WHERE preco LIKE '%$pesquisar%' LIMIT 100";
	$resultado_preco = mysqli_query($conn, $result_preco);
	
	while($rows_preco = mysqli_fetch_array($resultado_preco)){
		echo $rows_preco['preco']."<br>";
	}
?>
