<?php
session_start();
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
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
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">EasyShoes</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre a EasyShoes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Nossos Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="produtos.php">Nossos Produtos</a>
            </li>
              <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="produtos.php">Nossos Produtos</a></li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pagina_funcionario.php">Página do Funcionário</a></li>
              <?php if ( $_SESSION['logado'] == true ): ?>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="aboutuser.php"?> Usuário:  <?=$_SESSION['usuario']?></a></li>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="unlog.php"> Deslogar </a></li>
              <?php endif ?>
              <?php if ( $_SESSION['logado'] == false ): ?>
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
            <h2 class="section-heading text-white">Sobre: Funcionário(a) <?=$_SESSION['usuario']?> </h2>
            <hr class="light">
            <p class="text-faded"> A EasyShoes é uma WPA criada com o intuito de facilitar a vida e a venda dos vendedores de sapatarias. Com o sistema é possível verificar a disponibilidade, quantidade, numeração e setor onde o produto se encontra, diminuindo o tempo de espera e garantindo um atendimento mais rápido para o cliente.<br></p>
            <h3 class="section-heading text-white">Missão:</h3>
            <p class="text-faded">Promover o desenvolvimento das organizações,proporcionando aos nossos clientes agilidade,praticidade e eficácia no processo comercial, sempre trabalhando com excelência e inovação.</p>
            <h3 class="section-heading text-white">Visão:</h3>
            <p class="text-faded"> Disseminar a cultura digital, fornecendo soluções que facilitem o acesso à informação e à gestão. </p>
            <h3 class="section-heading text-white">Valores:</h3>
            <p class="text-faded"> Incentivar a transparência, o comprometimento e o respeito entre nossos funcionários, valorizar nossos clientes, atender suas necessidades e trabalhar com segurança,inovação e agilidade.</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">E o que a EasyShoes pode acrescentar em minha empresa?</a>
          </div>
        </div>
      </div>
    </section>

    <hr class="hr2">
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sobre Nós: </h2>
            <hr class="primary">
            <p>Projeto desenvolvido pelo 2º Período do Curso Informática para Internet - IPI, cadeira Projeto e Prática 1, do Professor e Orientador Alexandre Vianna. Alexandrevianna.net</p>
            <p>Desenvolvedoras:</p>
            <p>Bruna Rafaella De Oliveira Neves - IFPE CAMPUS IGARASSU <br> brunarafaellaneves@gmail.com </p>
            <p>Milena Lins Basílio - IFPE CAMPUS IGARASSU <br>  milennab7@gmail.com </p>
            <p>Jeislânia Oliveira da Silva - IFPE CAMPUS IGARASSU <br> laine.jos@gmail.com </p>
          </div>
        </div>
        
          <div class="mr-auto text-center">
            <i class="fa fa-folder-open fa-5x sr-contact"></i>
            <p>
              <a href="https://github.com/Skylria/Easyshoes">Visite nosso Repositório no GitHub</a>
            </p>
          </div>
        </div>
      </div>
            <center>
              <div>
                <h3 class="section-heading">Fique conectado!</h3>
                <a href="https://www.facebook.com/">
                  <i class="fa fa-4x fa-facebook-official" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="https://web.whatsapp.com/">
                  <i class="fa fa-4x fa-whatsapp" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/login?lang=pt">
                  <i class="fa fa-4x fa-twitter" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.google.com/gmail/">
                  <i class="fa fa-4x fa-google-plus-official" aria-hidden="true"></i>
                </a><br>
                <p></p>
                Ou ligue para (+55)813564-1897
              </div>
            </center>
    </section>

    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/popper/popper.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="css/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="css/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>

  </body>

</html>