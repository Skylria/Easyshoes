<?php
session_start();
$senha = $_POST['senha'];
$_SESSION['adm'] = false;
$confere = 123;
if ($senha == "123") {
	$_SESSION['adm'] = true;
}

header('location:../pageadm.php');

?>