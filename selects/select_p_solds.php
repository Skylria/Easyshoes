<!DOCTYPE html>
<html>
    <head>
     </head>
     <body>
        <table>
            <tr>
                <th style="background-color:#ea8457!important;">Data</th>
                <th style="background-color:#ea8457!important;">Hora</th>
                <th style="background-color:#ea8457!important;">Vendedor</th>
                <th style="background-color:#ea8457!important;">Cor</th>
                <th style="background-color:#ea8457!important;">Marca</th>
                <th style="background-color:#ea8457!important;">Número</th>
                <th style="background-color:#ea8457!important;">Setor</th>
                <th style="background-color:#ea8457!important;">Preço</th>
            </tr>
        <?php
        include 'bd/conexao_mysqli.php';
        $sql = "SELECT * FROM Vendas";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT v_data, v_hora, v_vendedor, p_cor, p_marca, p_numero, p_setor, p_quantidade, p_preco FROM Vendas") or die(mysqli_error($strcon));
         
        $re = mysqli_fetch_array($name);
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $data = $dados['v_data'];
        $hora = $dados['v_hora'];
        $vendedor = $dados['v_vendedor'];
        $cor = $dados['p_cor'];
        $marca = $dados['p_marca'];
        $numero = $dados['p_numero'];
        $setor = $dados['p_setor'];
        $quantidade = $dados['p_quantidade'];
        $preco = $dados['p_preco'];
        echo "<tr>
                
                <td>".$data."</td>
                <td>"."$hora"."</td>
                <td>"."$vendedor"."</td>
                <td>"."$cor"."</td>
                <td>".$marca."</td>
                <td>"."$numero"."</td>
                <td>"."$setor"."</td>
                <td>"."$preco".",00</td>
                
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
        </table>
    </body>
</html>


 