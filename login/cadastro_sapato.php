<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 </head>
 <body>
   <div class="login">
 	<center>
 		<h2 style="color:white">Cadastro de Sapato</h2>
 	</center>
 		<form method="post">
     		<input type="number" name="numero" placeholder="Número" required="required" />
         	<input type="text" name="cor" placeholder="Cor" required="required" />
         	<input type="text" name="marca" placeholder="Marca" required="required" />
         	<input type="number" name="setor" placeholder="Setor" required="required" />
         	<input type="number" name="quantidade" placeholder="Quantidade" required="required" />
         	<button type="submit" class="btn btn-primary btn-block btn-large"><a href="produtos.php">Cadastrar</a></button>
     	</form>
   </div>
 </body>
</html>
