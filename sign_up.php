<?php
session_start();
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
 if (!isset ($_SESSION['usuario'])){
 	$_SESSION['usuario'] = array();
 }
array_push($_SESSION['usuario'], [$usuario, $email, $senha]);
header('location:login.php');
?>
