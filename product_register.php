<?php include 'exts/testalogado.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EasyShoes</title>
        <?php include 'exts/csshrefs.php';?>
        <link rel="stylesheet" type="text/css" href="css/login/style.css">
        <style> body {background-size: 120%;} </style>
    </head>
    <body id="page-top">
        <?php include 'exts/pagetop.php';?>
        <div class="login">
            <h1>Cadastro de Produtos</h1>
            <form method="post" action="bd/conexao_produtos.php">

                <p class="principal">Selecione a Categoria Desejada:
                <select class="form-control" name="categoria">
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

                <p class="principal">Marca
                    <input type="text" class="form-control" name="marca" placeholder="Ex: Adidas" required="required">
                </p>
                <p class="principal">Número
                    <input type="number" class="form-control" name="numero" placeholder="Ex: 39" required="required">
                </p>
                <p class="principal">Cor
                    <input type="text" class="form-control" name="cor" placeholder="Ex: Branco" required="required">
                </p>
                <p class="principal">Setor
                    <input type="text" class="form-control" name="setor" placeholder="Setor onde se encontra o produto" required="required">
                </p>
                <p class="principal">Quantidade
                    <input type="number" class="form-control" name="quantidade" placeholder="Ex: 20" required="required">
                </p>
                <p class="principal">Preço
                    <input type="number" class="form-control" step="0.01" name="preco" placeholder="Ex: 25,00" required="required">
                </p>
                <input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
            </form>
        </div>
    </body>
</html>



