<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/login/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
  
<body>
  <body id="page-top">
    <?php include 'exts/pagetop.php';?>
    <section class="bg-primary" id="about">
        <h2 style="color:white">Cadastro de Produtos</h2>
    </section>
    
    <div class="login">
    <section id="services">
       <form method="post" action="bd/conexao_produtos.php">
            <p class="principal">Selecione a Categoria Desejada:
            <p>Selecione a Categoria Do Produto*</p>
            <select name="categoria">
            <?php
            include 'bd/conexaogeral.php';
            $sql = "SELECT * FROM categoria";
            foreach ($conn->query($sql) as $registro) {
                $id = $registro['id'];
                $nome = $registro['nome_cat'];
                echo "<option value='".$id."'>".strtoupper($nome)."</option>";
            }
            ?>
            </select>
            <p class="principal">Marca</p>
            <input type="text" name="marca" placeholder="Ex: Adidas" required="required" />
            <p class="principal">Número</p>
            <input type="number" name="numero" placeholder="Ex: 39" required="required" />
            <p class="principal">Cor</p>
            <input type="text" name="cor" placeholder="Ex: Branco" required="required" />
            <p class="principal">Setor</p>
            <input type="number" name="setor" placeholder="Setor onde se encontra o produto" required="required" />
            <p class="principal">Quantidade</p>
            <input type="number" name="quantidade" placeholder="Ex: 20" required="required" />
            <p class="principal">Preço</p>
            <input type="number" step="0.01" name="preco" placeholder="Ex: 25,00" required="required" />
            <input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
        </form>
      </div>
    </div>
      </section>
</body>
</html>



