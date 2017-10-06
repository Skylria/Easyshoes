<?php 
include 'header.php';
if (!isset ($_SESSION['produtos']) ) {
	$_SESSION['produtos'] = array();
}
if ($_SESSION['logado'] != true) {
	header('location: login.php');
}
$produtos = $_SESSION['produtos'];
?>
				
	<body>
	  <link rel="stylesheet" type="text/css" href="css/cadastro.css">	
		<div>
			<?php if (!$produtos): ?>
				<h2>Nenhum Produto Cadastrado :( </h2>
				<h2>Deseja cadastrar um ou mais Produtos?</h2>
				<a class="button" href="register_products.php">
				Cadastrar Novo(s) Produto(s) </a>
			<?php endif ?>
			<table border= "2px solid black" align="center">
			 	<?php if ($produtos): ?>
					<h1>PRODUTOS CADASTRADOS: </h1>
						<tr>
							<th> Marca </th>
							<th> Modelo </th>
							<th> Tamanho </th>
							<th> Cor </th>
							<th> Quantidade </th>
						</tr>
				<?php endif ?>
				
				<?php foreach ($produtos as $array => $dado):sort($_SESSION['produtos']); ?>
						<tr>
					        <td><?=$dado[0]?></td>
					        <td><?=$dado[1]?></td>
					        <td><?=$dado[2]?></td>
					        <td><?=$dado[3]?></td>
					        <td><?=$dado[4]?></td>
					        <td><a href="delete.php?id=<?=$array?>"> Apagar Produto </a></td>
						</tr>
				<?php endforeach ?>
			</table>
			<?php if ($produtos): ?>
				<h2>Deseja cadastrar um ou mais Produtos?</h2>
				<a class="button" href="register_products.php">
				Cadastrar Novo(s) Produto(s) </a>
			<?php endif ?>
		</div>
	</body>
<?php include "footer1.php" ?>

