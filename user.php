<?php
session_start();
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
}
if ($_SESSION['logado'] == false){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
  </head>
  <body id="page-top">
    <?php include 'exts/pagetop.php';?>


    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Lista de Usuários: </h2>
          </div>
        </div>
      </div>
    
    </section>

        <?php include'select2.php';?>
<?php include 'exts/javascripts.php';?>

</body>
</html>