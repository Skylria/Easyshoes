<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  <style type="text/css">
		p{
			color: white;
			font-size:13px;
		}
				}
		.login {
		    top:35% !important;
		}
		body {
            background-image:url('img/header.jpg');
            background-size:100%;
        }
        .a {
            background:white;
            text-decoration-color: black;
        }
        h1 {
		    color:white !important;
		}
	</style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/login/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script>
function verifica(){
  senha = document.getElementById("senha").value;
	forca = 0;
	mostra = document.getElementById("mostra");
	if((senha.length >= 4) && (senha.length <= 7)){
		forca += 10;
	}else if(senha.length>7){
		forca += 25;
	}
	if(senha.match(/[a-z]+/)){
		forca += 5;
	}
	if(senha.match(/[A-Z]+/)){
		forca += 10;
	}
	if(senha.match(/d+/)){
		forca += 20;
	}
	if(senha.match(/W+/)){
		forca += 25;
	}
	return mostra_res();
}
function mostra_res(){
	if(forca < 30){
		mostra.innerHTML = '<p>Senha Fraca </p>';
	}else if((forca >= 30) && (forca < 60)){
		mostra.innerHTML = '<p>Senha Justa </p>';;
	}else if((forca >= 60) && (forca < 85)){
		mostra.innerHTML = '<p>Forte </p>';
	}
}
</script>
</head>
<body>
	<h1 class="es">EasyShoes</h1>
	<div class="login">
	<h1>Cadastro: </h1>
    <form method="post" action="bd/conexao.php">
      <p>NOME: <input type="text" class="a" name="nome" placeholder="Ex: Ana" required="required" /></p>
      <p>CPF: <input type="number" class="a" name="cpf" placeholder="Apenas números" required="required" /></p>
      <p>TELEFONE: <input type="number" class="a" name="telefone" placeholder="Apenas Números (com DDD) ex: 819800000000" required="required" /></p>
      <p>EMAIL:<input type="email" class="a" name="email" placeholder="Ex: fulano@gmail.com" required="required" /></p>
      <p>LOGIN: <input type="text" class="a" name="login" placeholder="Ex: fulanosilva" required="required" /></p>
      <form name="teste" id="teste" onsubmit="return false">
      <p>SENHA: <input type="password" class="a" name="senha" id="senha" onkeyup="javascript:verifica()" placeholder="Não use senhas muito fáceis, como 123" required="required"><h1 id="mostra"></h1></p>
      <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar" value="cadastrar">
    </form>
</div>
  <script  src="js/login/index.js"></script>

</body>
</html>
