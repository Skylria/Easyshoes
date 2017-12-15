<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">body {background-size: 120%!important;}</style>
    <meta charset="UTF-8">
    <title>Cadastro - EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
    <link rel="stylesheet" type="text/css" href="css/login/style.css">

  </head>

  <body id="page-top">
    <?php include 'exts/pagetopindex.php';?>
    <div class="login">
      <h1>Cadastro: </h1>
      <form method="post" action="bd/conexao_cadastro.php">

        <p class="principal">Nome e Sobrenome:
          <input type="text" class="form-control" name="nome" placeholder="Nome" required="required">
        </p>

        <p class="principal">CPF:
          <input type="number" class="form-control" name="cpf" placeholder="CPF(Apenas números)" required="required">
        </p>

        <p class="principal">Telefone:
          <input type="text" class="form-control" name="telefone" placeholder="Numero (com DDD) EX. 81-9830000000" required="required">
        </p>

        <p class="principal">E-mail:
          <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </p>

        <p class="principal">Data de Nascimento: </p><input type="date" class="form-control" name="data" placeholder="Data de Nascimento" required="required">
        </p>

        <p class="principal">Usuario:
          <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required">
        </p>

        <p class="principal">Senha:
          <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">
        </p>

        <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar">

      </form>
    </div>
  </body>
</html>
