<?php
session_start();
$_SESSION['usuario'] = "";
$_SESSION['cargo'] = "";
$_SESSION['logado'] = false;
header('location:index.php');
?>
