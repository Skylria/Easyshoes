<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/produtos.css">
        <title>Meus Produtos</title>
    </head>
    <body>
        <!--<form method="POST" action="busca.php">
          <input type="text" name="busca" size="20">
          <input type="submit" value="Buscar" name="ok">
        </form>-->
        <br>
        <table class="table table-striped">
            <tr>
                <th>Categoria</th>
                <th>Marca </th>
                <th>Cor </th>
                <th>Número </th>
                <th>Preço </th>
                <th>Setor</th>
                <th>Quantidade Disp.</th>
                <th>Venda</th>
            </tr>
        <?php
      require_once 'bd/conexaogeral.php';
      $stmt = $conn->query("SELECT * FROM Cadastro_produtos, categoria where Cadastro_produtos.id_cat = categoria.id");
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {
        $categoria = $dados['nome_cat'];
        $codigo = $dados['codigo'];
        $cor = $dados['cor'];
        $marca = $dados['marca'];
        $numero = $dados['numero'];
        $setor = $dados['setor'];
        $quantidade = $dados['quantidade'];
        $preco = $dados['preco'];
        echo "<tr>
                <td>".$categoria."</td>
                <td>".$marca."</td>
                <td>"."$cor"."</td>
                <td>"."$numero"."</td>
                <td>R$ "."$preco"."</td>
                <td>".$setor."</td>
                <td>"."$quantidade"."</td>
                <td><a href='bd/venda.php?id=".$codigo."'><i class='fa fa-2x fa-shopping-cart sr-icons' title='Vender Produto'></i></a></td>
                
            </tr>";
        }
        ?>
        </table>
    </body>
</html>
