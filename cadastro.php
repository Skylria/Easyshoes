<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html >
<head>
  <style type="text/css">
    body {
      background-image: url('img/header.jpg');
      background-repeat: no-repeat;
      background-size: 120%;
    }
    input {
      background-color: white;
    }
    p {
      text-align: center !important;
    }
    html{
        overflow:auto !important;
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
  <?php include 'exts/pagetopindex.php';?>
  <div class="login">
  <h1>Cadastro: </h1>
    <form method="post" action="bd/conexao_cadastro.php">
      <p class="principal">Nome e Sobrenome: </p><input type="text" class="form-control" name="nome" placeholder="Nome" required="required" />
      <p class="principal">CPF: </p><input type="number" class="form-control" name="cpf" placeholder="CPF(Apenas números)" required="required" />
      <p class="principal">Telefone: </p><input type="text" class="form-control" name="telefone" placeholder="Numero (com DDD) EX. 81-9830000000" required="required" />
      <p class="principal">E-mail: </p><input type="email" class="form-control" name="email" placeholder="Email" required="required" />
      <p class="principal">Data de Nascimento: </p><input type="date" class="form-control" name="data" placeholder="Data de Nascimento" required="required" />
      <p class="principal">Usuario: </p><input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required" />
      <p class="principal">Senha: </p><input type="password" class="form-control" name="senha" placeholder="Senha" required="required" />
      <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar">
    </form>
</div>

</body>
</html>
