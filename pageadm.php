<?php
session_start();
if($_SESSION['adm'] == false){
    header('location:adm.php');
}
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
    <style> #contact {background-color: white !important; color:black !important} </style>
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
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contato</a>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a>
              <?php endif ?>
            </li>
            
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adm.php"><i class="fa fa-2x fa-gear sr-icons" title="Administração"></i></a></li>
            <?php if ($_SESSION['adm'] == true):?>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="unlogadm.php"><i class="fa fa-2x fa-power-off sr-icons" title="Deslogar"></i></a></li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Bem vindo(a), Administrador(a)!</h2>
            <p class="text-faded"> Este espaço é onde você terá acesso ao balanço de venda dos produtos.</p>
            <h3 class="section-heading text-white">Mais agilidade no seu atendimento. Aproveite!</h3><br>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Vendidos:</h2>
          </div>
        </div>
      </div>

    </section>

    	<link rel="stylesheet" type="text/css" href="css/produtos.css">
        <table class="quadrado">
            <tr>
                
                <th>Data</th>
                <th>Hora</th>
                <th>Vendedor</th>
                <th>Cor</th>
                <th>Marca</th>
                <th>Número</th>
                <th>Setor</th>
                <th>Quantidade Vendida</th>
                <th>Preço</th>
            </tr>
        <?php
        $host = "localhost";
        $usuario = "id3284881_ifpe";
        $senha = "123456";
        $bd = "id3284881_cadastro";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM Vendas";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT v_data, v_hora, v_vendedor, p_cor, p_marca, p_numero, p_setor, p_quantidade, p_preco FROM Vendas") or die(mysqli_error($strcon));
         
        $re = mysqli_fetch_array($name);
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $data = $dados['v_data'];
        $hora = $dados['v_hora'];
        $vendedor = $dados['v_vendedor'];
        $cor = $dados['p_cor'];
        $marca = $dados['p_marca'];
        $numero = $dados['p_numero'];
        $setor = $dados['p_setor'];
        $quantidade = $dados['p_quantidade'];
        $preco = $dados['p_preco'];
        echo "<tr>
                
                <td>".$data."</td>
                <td>"."$hora"."</td>
                <td>"."$vendedor"."</td>
                <td>"."$cor"."</td>
                <td>".$marca."</td>
                <td>"."$numero"."</td>
                <td>"."$setor"."</td>
                <td>"."$quantidade"."</td>
                <td>"."$preco"."</td>
                
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
        </table>
    </body>
</html>









    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/popper/popper.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="css/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="css/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/filter.js"></script>
  <?php include'footer.php';?>