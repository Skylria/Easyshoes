<!DOCTYPE html>
<html>
<head>
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/produtos.css">
    <title>Meus Produtos</title>
</head>
<body>

<table class="table table-striped table-dark">
    <tr>
        <th>Marca </th>
        <th>Cor </th>
        <th>Número </th>
        <th>Preço </th>
    </tr>
<?php
$host = "localhost";
$usuario = "id3284797_easyshoes";
$senha = "123456";
$bd = "id3284797_login";
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
