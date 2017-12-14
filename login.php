<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html >
<head>
  <style type="text/css">
    body {
      background-image: url('img/header.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
    }
    input {
      background-color: white;
    }
    p {
      text-align: center !important;
    }
  </style>
  <meta charset="UTF-8">
  <title>Login - EasyShoes</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="csslogin/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <?php include 'exts/csshrefs.php';?>

</head>

<body id="page-top">
  <?php include 'exts/pagetop.php';?>
  <div class="login">
  <h1>LOGIN</h1>
    <form method="post" action="bd/conexao_login.php">
      <p class="principal">Usuário: <input type="text"  class="form-control" name="usuario" placeholder="Ex: Ana" required="required" /></p>
      <p class="principal">Senha: <input type="password" class="form-control" name="senha" placeholder="Sua senha é confidencial. Não diga a ninguém." required="required" /> </p>
        <button type="submit" class="btn btn-primary btn-block btn-large">FAZER LOGIN</button>
    </form><br>
    <p class="principal">NÃO É CADASTRADO(A)?</p>
    <a class="btn btn-primary btn-block btn-large" href="cadastro.php">CADASTRE-SE</a>
</div>
  
    <script  src="js/index.js"></script>

</body>
</html>
