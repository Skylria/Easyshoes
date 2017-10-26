<?php
$host = "localhost";
$dbname = "id3284881_cadastro";
$usuario="id3284881_ifpe";
$senha = "123456";
$conexao = mysqli_connect($host, $usuario, $senha) or die(mysqli_error());
mysqli_select_db($conexao, $dbname) or die(mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function ltrue(){
			window.location=' ../pagina_funcionario.php';
		}
		function lfalse(){
			window.location=' ../login.php';
		}
	</script>
</head>
<body>

<?php  
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM cadastro WHERE U_LOGIN = '$login' and U_SENHA = '$senha'") or die(mysql_error('Login ou senha errados'));
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['logado'] = True;
	echo "<script>ltrue()</script>";

}
else{
	echo "<script>lfalse()</script>";
}
?>

</body>
</html>