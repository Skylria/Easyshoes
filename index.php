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
     <?php include ('css/plugsbootstrap.html'); ?>
    <style> #contact {background-color: white !important; color:black !important}
    h9{
    color:white;
    }</style>
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
              <a class="nav-link js-scroll-trigger" href="#about">SOBRE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">SERVIÇOS</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="produtos.php">NOSSOS PRODUTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">USUÁRIOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="equipe.php">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pagina_funcionario.php">PÁGINA DO FUNCIONÁRIO</a></li>
              <?php if ( $_SESSION['logado'] == true ): ?>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="aboutuser.php"?><i class="fa fa-2x fa-user-circle-o sr-icons" title="Deslogar"></i> USUÁRIO:  <?=$_SESSION['usuario']?></a></li>
                 
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="unlog.php"><i class="fa fa-2x fa-power-off sr-icons" title="Deslogar"></i></a></li>
              <?php endif ?>
              <?php if ( $_SESSION['logado'] == false ): ?>
              
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a>
              <?php endif ?>
            </li>
            
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adm.php"><i class="fa fa-2x fa-gear sr-icons" title="Administração"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">EasyShoes</h1>
          <hr>
          <p class="principal">A escolha eficiente para facilitar o seu trabalho!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saber Mais</a><br>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <!--<h2 class="section-heading text-white">O que é a EasyShoes? </h2>
            <hr class="light">
            <p class="text-faded"> A EasyShoes é uma WPA criada com o intuito de facilitar a vida e a venda dos vendedores de sapatarias. Com o sistema é possível verificar a disponibilidade, quantidade, numeração e setor onde o produto se encontra, diminuindo o tempo de espera e garantindo um atendimento mais rápido para o cliente.<br></p>-->
            <h3 class="section-heading text-white">Missão:</h3><br>
            <p class="text-faded">Promover o desenvolvimento das organizações,proporcionando aos nossos clientes agilidade,praticidade e eficácia no processo comercial, sempre trabalhando com excelência e inovação.</p>
            <h3 class="section-heading text-white">Visão:</h3><br>
            <p class="text-faded"> Disseminar a cultura digital, fornecendo soluções que facilitem o acesso à informação e à gestão. </p>
            <h3 class="section-heading text-white">Valores:</h3><br>
            <p class="text-faded"> Incentivar a transparência, o comprometimento e o respeito entre nossos funcionários, valorizar nossos clientes, atender suas necessidades e trabalhar com segurança,inovação e agilidade.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Nossos Serviços: </h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-clock-o sr-icons"></i>
              <h3>Agilidade</h3>
              <p class="text-muted">Com a EasyShoes, o atendimento se torna muito mais ágil. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-child sr-icons"></i>
              <h3>Facilidade</h3>
              <p class="text-muted">Com tudo na palma da mão, ter um balanço da situação da empresa nunca foi tão fácil. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-thumbs-up sr-icons"></i>
              <h3>Satisfação</h3>
              <p class="text-muted">Aqui, a satisfação é tripla. A empresa, o funcionário e o cliente saem ganhando.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart sr-icons"></i>
              <h3>Feito com muito amor</h3>
              <p class="text-muted">Pensando no melhor atendimento possível para você! </p>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!--<hr class="hr2">
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
    </section> -->

    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/popper/popper.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="css/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="css/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>

  </body>

</html>
<?php include'footer.php'?>
<?php include'chat.php'?>
