<?php 
	include 'header.php';
if (!isset ($_SESSION['produtos']) ) {
	$_SESSION['produtos'] = array();
}
if ($_SESSION['logado'] != true) {
	header('location: login.php');
}
?> 
	<head>
		<link rel="stylesheet" type="text/css" href="css/cadastro.css">	
	</head>
	<body>
		<div>
			
			<h1>CADASTRAR NOVO PRODUTO: </h1>
			<form action="process_product.php" method="POST">
				<h2>Marca: <input type="text" name="marca"></h2>
				<h2>Modelo: <input type="text" name="modelo"></h2>
				<h2>Tamanho: <input type="tamanho" name="duracao"></h2>
				<h2>Cor: <input type="text" name="cor"></h2>
				<h2>Quantidade: <input type="text" name="quantidade"></h2>
				<input class="button" type="submit" value="CADASTRAR">
			</form>
		</div>
	</body>
</html>