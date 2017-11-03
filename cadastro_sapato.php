<?php include 'header.php'; 
if ($_SESSION['logado']==false){
    header('location:login.php');
}
?>
  <meta charset="utf-8">
   <style>
        body {
            background-image:url('img/header.jpg');
            background-size:100%;
        }
        .login {
		    top:35% !important;
		}
		.a {
		    background: white;
		    text-decoration-color: black;
		}
		.login{
		    margin-top:8em;
		}
		p{
		    color: white;
		}
		input{
		    background-color: white;
		}
    </style>
  <meta charset="UTF-8">
  <title>Login - EasyShoes</title>
  
    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/login/style.css">
    <link href="css/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
    <style> #contact {background-color: black !important; color:white !important} </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="css/login/style.css">
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
  
 <body>
   <div class="login">
 	<center>
 		<h2 style="color:white">Cadastro de Produtos</h2>
 	</center>
 		<form method="post" action="bd/conexao_produtos.php">
 		    <p>Marca</p>
         	<input type="text" name="marca" placeholder="Ex: Adidas" required="required" />
         	<p>Número</p>
     		<input type="number" name="numero" placeholder="Ex: 39" required="required" />
     		<p>Cor</p>
         	<input type="text" name="cor" placeholder="Ex: Branco" required="required" />
         	<p>Setor</p>
         	<input type="number" name="setor" placeholder="Setor onde se encontra o produto" required="required" />
         	<p>Quantidade</p>
         	<input type="number" name="quantidade" placeholder="Ex: 20" required="required" />
         	<p>Preço</p>
         	<input type="number" step="0.01" name="preco" placeholder="Ex: 25,00" required="required" />
         	<input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
     	</form>
         
</html>

