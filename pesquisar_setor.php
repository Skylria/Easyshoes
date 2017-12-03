<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar setor">
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
	$result_setor = "SELECT * FROM Cadastro_produtos WHERE setor LIKE '%$pesquisar%' LIMIT 100";
	$resultado_setor = mysqli_query($conn, $result_setor);
	
	while($rows_setor = mysqli_fetch_array($resultado_setor)){
		echo $rows_setor['setor']."<br>";
	}
?>
