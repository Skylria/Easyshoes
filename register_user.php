<?php 
	include 'header.php';
?>
	<head>
		<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	</head>
	<body>
		<div>
			<h1>Cadastrar Funcionário:</h1>
			<form action="sign_up.php" method="POST">
			    Usuário:
			    <input type="text" name="usuario">
			    Email: 
			    <input type="text" name="email">
			    Senha: 
			    <input type="password" name="senha"><br><br>
			    <input class="button" type="submit" value="cadastrar"> 
			</form>
			<h1>Já é cadastrado(a)?</h1>
		    <a class="button" href="login.php">Faça o Login!</a>
		</div>
	</body>
</html>
