<?php include 'header.php';?>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
<body>
	<div>
	<form action="check_login.php" method="POST">
			<h1>Login:</h1>
	       Usuário ou Email<input type="text" name="login">
	       Senha <input type="password" name="senha"> <br><br>
	        <input class="button" type="submit" value="Logar"> 
	    </form>
	    <h1>Não é cadastrado(a)?</h1>
	    <a class="button" href="register_user.php">Cadastre-se!</a>
	
	</div>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
</body>
</html>
