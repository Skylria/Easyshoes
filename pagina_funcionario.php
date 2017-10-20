<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
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
              <a class="nav-link js-scroll-trigger" href="#services">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login/login.php">Fazer Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
            <hr class="primary">
          </div>
        </div>
      </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Pesquise aqui o que deseja:</h3>
            <div class="pull-right">
              <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                <i class="glyphicon glyphicon-filter"></i>
              </span>
            </div>
          </div>
          <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtro de Produtos" />
          </div>
          <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Código</th>
                <th>Marca</th>
                <th>Número</th>
                <th>Setor</th>
                <th>Quantidade</th>
                <th>Cor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Sapato Adidas</td>
                <td>42</td>
                <td>320</td>
                <td>20</td>
                <td>Preto</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Sandália Hawaianas</td>
                <td>38</td>
                <td>322</td>
                <td>18</td>
                <td>Branco</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Bolsa Corean</td>
                <td>x</td>
                <td>325</td>
                <td>10</td>
                <td>Preto</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Cinto de Couro</td>
                <td>x</td>
                <td>220</td>
                <td>20</td>
                <td>Bege</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Sapato Adidas</td>
                <td>38</td>
                <td>320</td>
                <td>20</td>
                <td>Branco</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Salto Scarpan</td>
                <td>37</td>
                <td>322</td>
                <td>39</td>
                <td>Vermelho</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

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

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/filter.js"></script>

  </body>

</html>