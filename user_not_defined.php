<?php 
include 'exts/testalogado.php';
if ($_SESSION['logado'] == false){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
  </head>

  <body id="page-top">
    <?php include 'exts/pagetop.php';?>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Bem vindo(a), <?= $_SESSION['usuario']?>!</h2>
            <p class="text-faded"> Por enquanto, você ainda é um usuário não definido. E o que isso quer dizer?</p>
            <h3 class="section-heading text-white">É que por enquanto ainda não sabemos o seu cargo na empresa. Mas é só você esperar e o administrador responsável irá cadastrar o seu cargo e aí você pode aproveitar a EasyShoes!</h3><br>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <a type="button" class="btn-primary btn-lg" href="index.php">Voltar para a Página Principal</a><br>
          </div>
        </div>
      </div>
    </section>
     <?php include 'mensagem.php';?>
    <?php include 'footer.php'; include 'exts/javascripts.php';?>
  </body>

</html>
