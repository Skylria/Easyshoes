<?php include 'header.php';?>
<body>
	<div>
		<form action="sign_up.php" method="POST">
			<h1>Cadastrar Funcionário:</h1>
		    Usuário <input type="text" name="usuario">
		    Email <input type="text" name="email">
		    Senha <input type="password" name="senha"><br><br>
		    <input class="button" type="submit" value="cadastrar"> 
		    <h1>Já é cadastrado(a)?</h1>
	    		<a class="button" href="login.php">Faça o Login!</a>
		</form>
	</div>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</body>
</html>
