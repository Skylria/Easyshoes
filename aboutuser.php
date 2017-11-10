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
    color:white;}
    .x{
        font-size:30px;
    }
    </style>
    <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.Jcrop.js"></script>
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
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adm.php"><i class="fa fa-2x fa-gear sr-icons" title="Administração"></i></a></li>
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
            <h2 class="section-heading text-white">Funcionário(a) <?= $_SESSION['usuario']?></h2>
           </div>
        </div>
      </div>
</section>
<h1 class="hidden-xs">Dados:</h1>
<?php
$host = "localhost";
$usuario = "id3284881_ifpe";
$l = $_SESSION['usuario'];
$senha = "123456";
$bd = "id3284881_cadastro";
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
$name = mysqli_query($strcon, "SELECT U_NOME, U_CPF, U_TELEFONE, U_EMAIL, U_LOGIN, U_SENHA FROM cadastro WHERE U_LOGIN = '$l'") or die(mysqli_error($strcon));
$re = mysqli_fetch_array($name);

$nome = $re['U_NOME'];
$cpf = $re['U_CPF'];
$telefone = $re['U_TELEFONE'];
$email = $re['U_EMAIL'];
$login = $re['U_LOGIN'];
$s = $re['U_SENHA'];
?>
<br>
<?php
 
	$dbname = "id3284881_cadastro";
	$usuario="id3284881_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	?>


	<link rel="stylesheet" type="text/css" href="css/cadastro_produtos1.css">


	
    	<p id="profile-name" class="profile-name-card"></p>
	<form name="frm-jcrop" id="frm-jcrop" action="aboutuser2.php" method="POST" enctype="multipart/form-data">

		<br>
		
		Insira sua foto : <input type="file" name="imagem">
		<br>
		<br><button  type="submit">ENVIAR</button>

	</form>
	<br>

  <div class="container">
    
    <p class="x"> Nome: </p>
    <p><?=$nome?> <a onclick="funcNome()"> <i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a></p>
    <p id="alteranome"></p>
    <p class="x"> Cpf: </p>
    <p><?=$cpf?> <a onclick="funcCpf()"> <i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a></p>
    <p id="alteracpf"></p>
    <p class="x"> Telefone: </p><br>
    <p><?=$telefone?> <a onclick="funcTelefone()"> <i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a></p>
    <p id="alteratelefone"></p>
    <p class="x"> Email: </p>
    <p><?= $email ?><a onclick="funcEmail()"><i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a></p>
    <p id="alteraemail"></p>
    <p class="x"> Login:</p>
    <p><?=$login  ?> <a onclick="funcLogin()"> <i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a></p>
    <p id="alteralogin"></p>
    <p class="x"> Senha: </p>
    <p><?= $s ?><a onclick="funcSenha()"> <i class="fa fa-lg fa-pencil" aria-hidden="true"></i> </a></p>
    <p id="alterasenha"></p>
  </div>
        
<?php

mysqli_close($strcon);
?>
</table>
<script>
        function funcNome(){
            var a = document.getElementById('alteranome').innerHTML="<form method='POST' action='useredit/editanome.php'> Novo Nome: <input type='text' name='nome'><input type='submit' value='salvar'></form>";
        }
        function funcCpf(){
            var b = document.getElementById('alteracpf').innerHTML="<form method='POST' action='useredit/editacpf.php'> Novo Cpf: <input type='number' name='cpf'><input type='submit' value='salvar'></form>";
        }
        function funcTelefone(){
            var c = document.getElementById('alteratelefone').innerHTML="<form method='POST' action='useredit/editatelefone.php'> Novo Telefone: <input type='number' name='telefone'><input type='submit' value='salvar'></form>";
        }
        function funcEmail(){
            var d = document.getElementById('alteraemail').innerHTML="<form method='POST' action='useredit/editaemail.php'> Novo Email: <input type='email' name='email'><input type='submit' value='salvar'></form>";
        }
        function funcLogin(){
            var e = document.getElementById('alteralogin').innerHTML="<form method='POST' action='useredit/editalogin.php'> Novo Login: <input type='text' name='login'><input type='submit' value='salvar'></form>";
        }
        function funcSenha(){
            var f = document.getElementById('alterasenha').innerHTML="<form method='POST' action='useredit/editasenha.php'> Nova Senha: <input type='text' name='senha'><input type='submit' value='salvar'></form>";
        }
    </script>
</body>
</html>



<?php include 'footer.php';?>