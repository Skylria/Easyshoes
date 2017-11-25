<?php include 'exts/testalogado.php';?>
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
            <h2 class="section-heading text-white">Bem vindo(a), (funcionário)!</h2>
            <p class="text-faded"> Este espaço é onde você, funcionário(a), terá acesso ao estoque dos produtos, assim como o setor onde ele se encontra, a quantidade disponível, marca, cor e muito mais.</p>
            <h3 class="section-heading text-white">Tudo bem mais fácil para você!</h3><br>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Produtos: </h2>
            <a type="button" class="btn-primary btn-lg" href="cadastro_sapato.php">Cadastrar Novo Produto</a><br>
            <?php include 'select_produtos.php'; ?>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; include 'exts/javascripts.php';?>
  </body>

</html>
