<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
   <?php include ('css/plugsbootstrap.html'); ?>
    <style> #contact {background-color: white !important; color:black !important}
    h9{
    color:white;}
    </style>
  </head>

    <?php include ('css/login/cadastro.html'); ?>
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
            Selecione a Categoria Desejada: <select id="link" name="categoria">
            <?php
          while($registro = mysqli_fetch_array($resultado)){
              $nome = $registro['nome'];
                $id = $registro['codigo'];
            echo "<option value='".$id."'>".strtoupper($nome)."</option>";
            } 
          ?>
               <option value="" selected>Categorias</option>
               <option value="">Sandália</option>
               <option value="">Sapato social</option>
               <option value="">Saltos</option>
               <option value="">Sapatilhas</option>
               <option value="">Tênis</option>
               <option value="">Bolsas</option>
            </select>
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
            <p>Insira uma imagem</p>
            <input type="file" name="imagem">
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
        </form>
</body>
</html>


