<?php
session_start();
if($_SESSION['adm'] == false){
    header('location:adm.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <?php include ('exts/csshrefs.php'); ?>
    <style> #contact {background-color: white !important; color:black !important} </style>
  </head>
  <body id="page-top">
    <?php include 'exts/pagetop.php';?>

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
        $usuario = "root";
        $senha = "";
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


  <?php include 'exts/javascripts.php'; include'footer.php';?>