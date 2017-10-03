<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['produtos'][$id]);
header('location: main_page.php');

?>
