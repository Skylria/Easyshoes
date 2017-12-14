<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Login - EasyShoes</title>
    <?php include ('exts/csshrefs.php'); ?>
    <style> 
        #contact {background-color: black !important; color:white !important} 
        p {
            color:white;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/login/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  </head>
  <body id="page-top">
    <?php include 'exts/pagetop.php'; ?>
    <div class="login">
      <h1 class="es">EasyShoes</h1>
      <h1>Administração</h1>
        <form  method="post" action="bd/adm_login.php">
          <p>Digite a Senha Mestra</p>
            <input type="password" name="senha" placeholder="Senha" required="required" />
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Logar">
      </a></button>
        </form>
    </div>
    <script  src="js/login/index.js"></script>
    
</body>
</html>

      
