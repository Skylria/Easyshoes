<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="css/produtos.css">
    	<title>Meus Produtos</title>
    </head>
    <body>
        <table class="quadrado">
            <tr>
                <th>Marca </th>
                <th>Cor </th>
                <th>Número </th>
                <th>Preço </th>
                <th>Setor</th>
                <th>Quantidade Disp.</th>
                <th>Deletar Produto </th>
            </tr>
        <?php
        $host = "localhost";
        $usuario = "id3284881_ifpe";
        $senha = "123456";
        $bd = "id3284881_cadastro";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM Cadastro_produtos";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT codigo, cor, marca, numero, setor, quantidade, preco FROM Cadastro_produtos") or die(mysqli_error($strcon));
        $re = mysqli_fetch_array($name);
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $codigo = $dados['codigo'];
        $cor = $dados['cor'];
        $marca = $dados['marca'];
        $numero = $dados['numero'];
        $setor = $dados['setor'];
        $quantidade = $dados['quantidade'];
        $preco = $dados['preco'];
        echo "<tr>
                <td>".$marca."</td>
                <td>"."$cor"."</td>
                <td>"."$numero"."</td>
                <td>R$ "."$preco"."</td>
                <td>".$setor."</td>
                <td>"."$quantidade"."</td>
                <td><a href='deletarproduto.php?id=".$codigo."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
        </table>
    </body>
</html>
