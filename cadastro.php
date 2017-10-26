<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  <style type="text/css">
		p{
			color: white;
		}
	</style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/login/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
	<h1 class="es">EasyShoes</h1>
	<div class="login">
	<h1>Cadastro: </h1>
    <form method="post" action="bd/conexao.php">
      <p>Nome: <input type="text" name="nome" placeholder="Nome" required="required" /></p>
      <p>Cpf: <input type="text" name="cpf" placeholder="CPF(Apenas números)" required="required" /></p>
      <p>Telefone: <input type="text" name="telefone" placeholder="Telefone" required="required" /></p>
      <p>Email:<input type="email" name="email" placeholder="Email" required="required" /></p>
      <p>Login: <input type="text" name="login" placeholder="Login" required="required" /></p>
      <p>Senha: <input type="password" name="senha" placeholder="Senha" required="required" /></p>
      <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar" value="cadastrar">
    </form>
</div>
  <script  src="js/login/index.js"></script>

</body>
</html>
