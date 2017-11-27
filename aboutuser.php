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
    <?php include ('exts/csshrefs.php'); ?>
    <style> 
    body{
      text-align: center !important;
      }
      #contact {background-color: white !important; color:black !important}
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
    <?php include 'exts/pagetop.php' ?>
<?php
$host = "localhost";
$usuario = "root";
$l = $_SESSION['usuario'];
$senha = "";
$bd = "id3284881_cadastro";
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
$name = mysqli_query($strcon, "SELECT U_NOME, U_CPF, U_TELEFONE, U_EMAIL, U_LOGIN, U_SENHA, U_Foto FROM cadastro WHERE U_LOGIN = '$l'") or die(mysqli_error($strcon));
$re = mysqli_fetch_array($name);

$nome = $re['U_NOME'];
$cpf = $re['U_CPF'];
$telefone = $re['U_TELEFONE'];
$email = $re['U_EMAIL'];
$login = $re['U_LOGIN'];
$s = $re['U_SENHA'];
$foto = $re['U_Foto'];
 

include 'bd/conexaogeral.php';
?>
<section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Funcionário(a) <?= $_SESSION['usuario']?></h2>
            <img src="uploads/<?=$foto?>" class="img-circle" width="250px">
           </div>
        </div>
      </div>
</section>

  <link rel="stylesheet" type="text/css" href="css/cadastro_produtos1.css">
  
      <p id="profile-name" class="profile-name-card"></p>
  <form name="frm-jcrop" id="frm-jcrop" action="aboutuser2.php" method="POST" enctype="multipart/form-data">

    <br>
    
    Trocar Foto de Perfil: <input type="file" name="imagem">
    <button  type="submit"><i class="fa fa-2x fa-upload sr-icons" title="Upload"></i></button>

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