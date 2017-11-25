<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="csslogin/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <h1 class="es">EasyShoes</h1>
  <div class="login">
  <h1>Cadastro: </h1>
    <form method="post" action="conexao_cadastro.php">
      <input type="text" name="nome" placeholder="Nome" required="required" />
      <input type="number" name="cpf" placeholder="CPF(Apenas números)" required="required" />
      <input type="text" name="usuario" placeholder="Usuario" required="required" />
      <input type="email" name="email" placeholder="Email" required="required" />
      <input type="date" name="data" placeholder="Data de Nascimento" required="required" />
      <input type="password" name="senha" placeholder="Senha" required="required" />
      <input type="reset" name="apagar" placeholder="Apagar Dados" required="required" />
      <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar">
    </form>
</div>
  <script  src="jslogin/index.js"></script>

</body>
</html>
