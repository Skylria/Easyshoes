<?php
session_start();
if($_SESSION['cargo'] != "adm"){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EasyShoes</title>
        <?php include ('exts/csshrefs.php'); ?>
    </head>
    
    <body id="page-top">
    
        <?php include 'exts/pagetop.php';?>
        <section id="services">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white"> Bem vindo(a), Administrador(a)!</h2>
                <p class="text-white"> Este espaço é onde você terá acesso ao balanço de venda dos produtos, assim como os usuários cadastrados nessa plataforma e as mensagens deixadas pelos mesmos.</p>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a type="button" class="btn-primary btn-lg" href="user.php">Acompanhar Usuarios</a>
                    <br><br><br><br>
                    <h2 class="section-heading">Mensagens:</h2>
                    <h2 class="section-heading">
                        <details>
                            <summary class="btn-primary btn-lg"> Ver </summary>
                            <?php include'selects/select_messages.php';?>
                        </details>
                    </h2>
                    <br><br>
                    <h2 class="section-heading">Produtos Vendidos:</h2>
                        <details>
                            <summary class="btn-primary btn-lg">Mostrar</summary>
                                <?php include 'selects/select_p_solds.php'; ?>
            </details>  
        </section>
      <link rel="stylesheet" type="text/css" href="css/products.css">
    </body>
</html>


  <?php include 'exts/javascripts.php'; include'footer.php';?>