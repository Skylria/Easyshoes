<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - EasyShoes</title>
  <style type="text/css">
		p{
			color: white;
		}
	</style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/login/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
    <script >
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
    forca += 10;
  }
  if(senha.match(/[A-Z]+/)){
    forca += 20;
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
    mostra.innerHTML = '<tr><td bgcolor="red" width="'+forca+'"></td><td>Fraca </td></tr>';
  }else if((forca >= 30) && (forca < 60)){
    mostra.innerHTML = '<tr><td bgcolor="yellow" width="'+forca+'"></td><td>Justa </td></tr>';;
  }else if((forca >= 60) && (forca < 85)){
    mostra.innerHTML = '<tr><td bgcolor="blue" width="'+forca+'"></td><td>Forte </td></tr>';
  }else{
    mostra.innerHTML = '<tr><td bgcolor="green" width="'+forca+'"></td><td>Excelente </td></tr>';
  }
}
</script>
</head>
<body>
	<h1 class="es">EasyShoes</h1>
	<div class="login">
	<h1>Cadastro: </h1>
    <form method="post" action="bd/conexao.php">
      <p>Nome: <input type="text" name="nome" placeholder="Nome" required="required" /></p>
      <p>Cpf: <input type="text" name="cpf" placeholder="CPF(Apenas números)" required="required" /></p>
      <p>Telefone: <input type="text" name="telefone" placeholder="Telefone" required="required" /></p>
      <p>Email:<input type="email" name="email" placeholder="Email" required="required" /></p>
      <p>Login: <input type="text" name="login" placeholder="Login" required="required" /></p>
      <form name="teste" id="teste" onsubmit="return false">
      Senha: <input type="password" name="senha" id="senha" onkeyup="javascript:verifica()" />
      <table id="mostra"></table>
      <input type="submit" class="btn btn-primary btn-block btn-large" name="cadastrar" value="cadastrar">
      <table id="mostra"></table>
    </form>
</div>
  <script  src="js/login/index.js"></script>

</body>
</html>
