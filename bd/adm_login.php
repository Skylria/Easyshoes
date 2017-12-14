<?php
session_start();
$senha = $_POST['senha'];
$_SESSION['adm'] = false;
$confere = "mestre4dmin";
if ($senha == $confere) {
	$_SESSION['adm'] = true;
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
}
header('location:../pageadm.php');

?>
