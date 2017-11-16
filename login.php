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
    <title>Login - EasyShoes</title>
    <?php include ('css/plugsbootstrap.html'); ?>
    <?php include ('css/login/login.html'); ?>
    <style> 
        #contact {background-color: black !important; color:white !important} 
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/login/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
              <a class="nav-link js-scroll-trigger" href="equipe.php">EQUIPE</a>
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
 
    <div class="login">
      <h1 class="es">EasyShoes</h1>
      <h1>Login para Funcionários</h1>
        <form  method="post" action="bd/conexao_login.php">
          <input type="text" name="login" placeholder="Usuario" required="required" />
            <input type="password" name="senha" placeholder="Senha" required="required" />
         
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Fazer Login">
      </a></button>
        </form>
        <h1 align="center">Não é cadastrado(a)?</h1>
        <a class="btn btn-primary btn-block btn-large" href="cadastro.php" style="a{text-decoration:none;}">Cadastre-se</a>
    </div>
    <script  src="js/login/index.js"></script>
    
</body>
</html>

      
