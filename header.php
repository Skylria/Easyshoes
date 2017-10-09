<?php
session_start();
if (!isset ($_SESSION['logado']) ) {
	$_SESSION['logado'] = array();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
		<header>
		<div align="center">
			<img src="imagens/logo.jpg">	
			<nav id="menu">
		 		<ul>
					<li>
					<li><a href="register_products.php">  Cadastrar Produto  </a></li>
					<li><a href="main_page.php">  Nossos Produtos  </a></li>
					<li><a href="about.php">  Sobre Nós  </a></li>
					<?php if($_SESSION['logado']== true): ?>
						<a class="nh">Olá, <?=$_SESSION['dadousuario']?>! </a>
						<li><a class="nh1" href="logout.php"> DESLOGAR</a></li>
					<?php endif ?>
					<?php if($_SESSION['logado']== false): ?>
						<li><a class="nh1" href="index.php"> FAZER LOGIN</a></li>
					<?php endif ?>
				</ul>
				</nav>
		</header>
