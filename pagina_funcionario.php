<?php 
include 'exts/testalogado.php';
if ($_SESSION['logado'] == false){
    header('location:login.php');
}
if($_SESSION['cargo'] != "funcionario"){
    if($_SESSION['cargo'] == "adm"){
        header('location:pageadm.php');
    }
    elseif($_SESSION['cargo'] == "NAO DEFINIDO"){
        header('location:usuarionaodefinido.php');
    }
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
     <link rel="stylesheet" type="text/css" href="css/input.css">
    <?php include 'exts/csshrefs.php';?>
    <style>
        .x {
          -webkit-border-radius: 20;
          -moz-border-radius: 20;
          border-radius: 20px;
          font-family: Georgia;
          color:#800000;
          font-size: 15px;
          background: white;
          padding: 8px 16px 8px 16px;
          text-decoration: none;
}
.x:hover {
  background: #db8f7d;
  text-decoration: none;
}
    </style>
  </head>

  <body id="page-top">
    <?php include 'exts/pagetop.php';?>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Bem vindo(a), <?= $_SESSION['usuario']?>!</h2>
            <p class="text-white"> Este espaço é onde você, funcionário(a), terá acesso ao estoque dos produtos, assim como o setor onde ele se encontra, a quantidade disponível, marca, cor e muito mais.</p>
            <h3 class="section-heading text-white">Tudo bem mais fácil para você!</h3><br>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
            <div>
                <form method="POST" action="pesquisar_cor.php">
                  <input class="css-input"  type="text" name="pesquisa" placeholder="Buscar Cor">
                  <input  class="x" type="submit" value="Buscar"><br>
                </form> <br>
            </div>
                <form  method="POST" action="pesquisar_marca.php">
                  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Marca">
                  <input class="x" type="submit" value="Buscar"><br>
                </form><br>
                <form method="POST" action="pesquisar_categoria.php">
                  <input class="css-input"  type="text" name="pesquisa" placeholder="Buscar Categoria">
                  <input  class="x" type="submit" value="Buscar"><br>
                </form> <br>
                <form method="POST" action="pesquisar_numero.php">
                  <input class="css-input"  type="text" name="pesquisa" placeholder="Buscar Numero">
                  <input  class="x" type="submit" value="Buscar"><br>
</form> <br>



<center>
    <br><br>
<h2 class="section-heading">Produtos: </h2>
            <a type="button" class="btn-primary btn-lg" href="cadastro_sapato.php">Cadastrar Novo Produto</a><br><br>
            <?php include 'select_produtos.php'; ?>
            </center>
          </div>
        </div>
      </div>
    </section>
     <?php include 'mensagem.php';?>

    <?php include 'footer.php'; include 'exts/javascripts.php';?>
  </body>

</html>
