<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login - EasyShoes</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <h1 class="es">EasyShoes</h1>
  <div class="login">
  <h1>Login para Funcionários</h1>
    <form method="post" action="conexao_login.php">
      <input type="text" name="usuario" placeholder="Usuario ou Email" required="required" />
        <input type="password" name="senha" placeholder="Senha" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large"><a href="cadastro_sapato.php" style="text-decoration: none;">Fazer Login
  </a></button>
    </form>
    <h1 align="center">Não é cadastrado(a)?</h1>
    <a class="btn btn-primary btn-block btn-large" href="cadastro.php">Cadastre-se</a>
</div>
  
    <script  src="js/index.js"></script>

</body>
</html>
