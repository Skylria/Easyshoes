
<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="produtos.css">
    <title>Nossos Produtos</title>
    <link href="js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="js/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <?php include 'exts/pagetop.php';?>

    <?php include 'exts/javascripts.php';?>
<section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Nossos Produtos</h2>
            
          </div>
        </div>
      </div>
    </section>
<?php
include 'produtos_publicos.php';include 'exts/javascripts.php'; include 'footer.php'; ?>

  </body>

</html>
