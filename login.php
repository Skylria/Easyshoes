<?php
if (!isset($_SESSION['logado'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario']= "";
}
include 'header.php';
?>
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
		    color:white;
		}
		.login{
		    margin-top:8em;
		}
		h1 {
		    color:white !important;
		}
    </style>
  <meta charset="UTF-8">
  <title>Login - EasyShoes</title>
  
       <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
    	<h1 class="es">EasyShoes</h1>
    	
    	<h1>Login para Funcionários</h1>
        <form method="post" action="bd/conexao_login.php">
        	<input type="text" name="login" placeholder="Usuario" required="required" />
            <input type="password" name="senha" placeholder="Senha" required="required" />
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Fazer Login">
    	</a></button>
        </form>
       	<h1 align="center">Não é cadastrado(a)?</h1>
       	<a class="btn btn-primary btn-block btn-large" href="cadastro.php" style="a{text-decoration:none;}">Cadastre-se</a>
    </div>
    <script  src="js/login/index.js"></script>
</body>
</html>
