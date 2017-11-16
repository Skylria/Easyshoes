<?php
session_start();
$_SESSION['adm'] = false;
header('location:index.php');
?>