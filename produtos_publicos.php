<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/produtos.css">
    <title>Meus Produtos</title>
</head>
<body>
<form method="POST" action="produtos_publicos.php">
  <input type="text" name="busca" size="20">
  <input type="submit" value="Buscar" name="ok">
</form><br>
<!--<div class="container" id="container">-->
<!--    <div class="row">-->
<!--        <div class="well">-->
<table class="table table-striped table-dark">
    <tr>
        <th>Marca </th>
        <th>Cor </th>
        <th>Número </th>
        <th>Preço </th>
    </tr>
<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "id3284881_cadastro";
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "SELECT * FROM Cadastro_produtos";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
$name = mysqli_query($strcon, "SELECT  marca, cor, numero, preco FROM Cadastro_produtos") or die(mysqli_error($strcon));
$re = mysqli_fetch_array($name);
while($dados = mysqli_fetch_array($resultado)):
?>

<?php
$cor = $dados['cor'];
$marca = $dados['marca'];
$numero = $dados['numero'];
$preco = $dados['preco'];
?>
    <tr>
        <td><?=$marca ?> </td>
        <td><?=$cor ?> </td>
        <td><?=$numero ?> </td>
        <td><?= $preco ?>,00</td>
    </tr>
<?php
endwhile;
mysqli_close($strcon);
?>
</table>
</body>
</html>