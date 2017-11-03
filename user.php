<?php
session_start();
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
}
if ($_SESSION['logado'] == false){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="css/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
    <style> #contact {background-color: white !important; color:black !important} </style>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">EasyShoes</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">SOBRE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">SERVIÇOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">CONTATO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="produtos.php">NOSSOS PRODUTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">USUÁRIOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pagina_funcionario.php">PÁGINA DO FUNCIONÁRIO</a></li>
              <?php if ( $_SESSION['logado'] == true ): ?>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="aboutuser.php"?><i class="fa fa-2x fa-user-circle-o sr-icons" title="Deslogar"></i> USUÁRIO:  <?=$_SESSION['usuario']?></a></li>
                 
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="unlog.php"><i class="fa fa-2x fa-power-off sr-icons" title="Deslogar"></i></a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="compras.php"><i class="fa fa-2x fa-shopping-cart sr-icons" title="Carrinho do Cliente"></i></a></li>
              <?php endif ?>
              <?php if ( $_SESSION['logado'] == false ): ?>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contato</a>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Lista de Usuários: </h2>
          </div>
        </div>
      </div>
    
    </section>
    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/popper/popper.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="css/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="css/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/filter.js"></script>
    

  </body>

</html>
<?php include'select2.php';
 ?>
