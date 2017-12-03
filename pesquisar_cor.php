
<form method="POST" action="">
	<input type="text" name="pesquisar" placeholder="Buscar Cor">
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
	$result_cor = "SELECT * FROM Cadastro_produtos WHERE cor LIKE '%$pesquisar%' LIMIT 100";
	$resultado_cor = mysqli_query($conn, $result_cor);
	
	while($rows_cor = mysqli_fetch_array($resultado_cor)){
		echo $rows_cor['cor']."<br>";
	}
?>
