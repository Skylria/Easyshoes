<?php
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  <?php include ('css/login/cadastro.html');?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/login/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="js/verificasenha.js"></script>
  <?php include ('css/plugsbootstrap.html'); ?>
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
</head>
<body>
	<div class="login">
    	<h2 style="color:white">Cadastro: </h2>
        <form method="post" action="bd/conexao.php">
            <p>NOME: <input type="text" class="a" name="nome" placeholder="Ex: Ana" required="required" /></p>
            <p>CPF: <input type="number" class="a" name="cpf" placeholder="Apenas números" required="required" /></p>
            <p>TELEFONE: <input type="number" class="a" name="telefone" placeholder="Apenas Números (com DDD) ex: 819800000000" required="required" /></p>
            <p>EMAIL:<input type="email" class="a" name="email" placeholder="Ex: fulano@gmail.com" required="required" /></p>
            <p>LOGIN: <input type="text" class="a" name="login" placeholder="Ex: fulanosilva" required="required" /></p>
            <form name="teste" id="teste" onsubmit="return false">
            <p>SENHA: <input type="password" class="a" name="senha" id="senha" size=8 onkeyup="javascript:verifica()" placeholder="Não use senhas muito fáceis, como 123" required="required"><h1 id="mostra"></h1></p>
            <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar" value="cadastrar">
        </form>
    </div>
  <script  src="js/login/index.js"></script>
</body>
</html>
<?php include'chat.php'?>
