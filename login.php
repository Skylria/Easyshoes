<?php include 'exts/testalogado.php';?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <title>Login - EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
    <link rel="stylesheet" type="text/css" href="css/login/style.css">

  </head>

  <body id="page-top">

    <?php include 'exts/pagetop.php';?>
    <div class="login">
      <h1>LOGIN</h1>

      <form method="post" action="bd/conexao_login.php">

        <p class="principal">Usuário: 
          <input type="text"  class="form-control" name="usuario" placeholder="Ex: Ana" required="required" />
        </p>

        <p class="principal">Senha: 
          <input type="password" class="form-control" name="senha" placeholder="Sua senha é confidencial. Não diga a ninguém." required="required" /> 
        </p>
        <button type="submit" class="btn btn-primary btn-block btn-large">FAZER LOGIN</button>

      </form><br>
      
      <p class="principal">NÃO É CADASTRADO(A)?</p>
      <a class="btn btn-primary btn-block btn-large" href="register.php">CADASTRE-SE</a>
    </div>
    
    <script  src="js/index.js"></script>

  </body>
</html>
