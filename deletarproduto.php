<?php
$host = "localhost";
$usuario = "id3284881_ifpe";
$senha = "123456";
$bd = "id3284881_cadastro";
$id = $_GET['id'];
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM Cadastro_produtos WHERE codigo = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
header('location: pagina_funcionario.php');
?>