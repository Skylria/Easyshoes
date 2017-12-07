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
    <title>EasyShoes</title>
     <link rel="stylesheet" type="text/css" href="css/input.css">
     <link rel="stylesheet" type="text/css" href="css/produtos.css">
    <head>
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
              
<form method="POST" action="pesquisar_cor.php">
  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Cor">
  <input  class="x" type="submit" value="Buscar">
</form>
<form method="POST" action="pesquisar_marca.php">
  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Marca">
  <input class="x" type="submit" value="Buscar">
</form>
<form method="POST" action="pesquisar_numero.php">
  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Número">
  <input class="x" type="submit" value="Buscar">
</form>
<form method="POST" action="pesquisar_setor.php">
  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Setor">
  <input class="x" type="submit" value="Buscar">
</form>
<form method="POST" action="pesquisar_categoria.php">
  <input class="css-input" type="text" name="pesquisa" placeholder="Buscar Categoria">
  <input class="x" type="submit" value="Buscar">
</form>
</div>
<center>
    <br><br>
<h2 class="section-heading">Produtos: </h2>
            <a type="button" class="btn-primary btn-lg" href="cadastro_sapato.php">Cadastrar Novo Produto</a><br><br>
             <a type="button" class="btn-primary btn-lg" href="pagina_funcionario.php">Ver Produtos</a><br>
           
            </center>
          </div>
        </div>
      </div>
    </section>
     
<?php include 'bd/conexaogeral.php'; ?>
 
<?php

$buscar = $_POST['pesquisa'];
$data = $conn->query("SELECT * FROM Cadastro_produtos WHERE cor LIKE '%".$buscar."%'");
echo "<table>";
echo"  <tr>
<th>Categoria</th>
<th>Marca </th>
<th>Cor</th>
<th>Número</th>
<th>Setor</th>
<th>Preço</th>
</tr>";
foreach($data as $row) {
  echo "
  <tr>
  <td>".$row['id_cat']."</td>
  <td>".$row['marca']."</td>
  <td>".$row['cor']."</td>
  <td>".$row['numero']."</td>
  <td>".$row['setor']."</td>
  <td>".$row['preco']." </td>
  </tr>
  ";
}
echo "</table>";
?>
          </div>
        </div>
      </div>
    </section>
     <?php include 'mensagem.php';?>

    <?php include 'footer.php'; include 'exts/javascripts.php';?>
  </body>

</html>
