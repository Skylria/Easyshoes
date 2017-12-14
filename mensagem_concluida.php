<?php 
include 'exts/testalogado.php';
if ($_SESSION['logado'] == false){
    header('location:login.php');
}
if($_SESSION['cargo'] != "funcionario"){
    header('location:usuarionaodefinido.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <style type="text/css">
      .f{
        background-color:  #ff8c00;
      }
      .ee{  font-family: Comic Sans, Comic Sans MS, cursive;
          font-size: 3em;
          font-weight: 300;
          line-height: 55px;
          margin-bottom: 25px;
          text-align: center;
          text-transform: none;
      }
      .zs{
        font-family: Andale Mono, monospace;
        font-size: 2em;
      }
      .ii{
        cursor: pointer;
          text-align: center;
          background-color:#ff8c00;
          width: 10em;
      }
      .enviar {
          -webkit-border-radius: 28;
          -moz-border-radius: 28;
          border-radius: 28px;
          font-family: Georgia;
          color: #ffffff;
          font-size: 26px;
          background: #e38532;
          padding: 10px 20px 10px 20px;
          text-decoration: none;
}
      .enviar:hover {
          background: #101214;
          background-image: -webkit-linear-gradient(top, #101214, #d99734);
          background-image: -moz-linear-gradient(top, #101214, #d99734);
          background-image: -ms-linear-gradient(top, #101214, #d99734);
          background-image: -o-linear-gradient(top, #101214, #d99734);
          background-image: linear-gradient(to bottom, #101214, #d99734);
          text-decoration: none;
      }
    </style>

    <?php include 'exts/csshrefs.php';?>
  </head>

  <body id="page-top">
    <?php include 'exts/pagetop.php';?>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Bem vindo(a), <?= $_SESSION['usuario']?>!</h2>
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
     <center>
            <p class="ii">
                <i class="chevron-goodies chevron fa fa-chevron-down"></i>
            </p>
              <div class="f">
                <br><br>
              <p class="ee">Olá <?= $_SESSION['usuario']?>!</p><br> <br>
              <h3 class="zs">Sua mensagem foi enviada com sucesso. Deseja enviar outra?</h3><br><br><br><br>
              <a href="pagina_funcionario.php"><button class="enviar">Enviar</button></a>
                <p>&nbsp</p>
                <p>&nbsp</p>
                <p>&nbsp</p>
            </div>
          </center>
    <?php include 'footer.php'; include 'exts/javascripts.php';?>
  </body>

</html>
