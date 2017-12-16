
<!DOCTYPE html>
<html>
    <head>
     </head>
     <body>
        <table>
            <tr>
                <th style="background-color:#ea8457!important;padding=8px!important">Data</th>
                <th style="background-color:#ea8457!important;padding=8px!important">Hora</th>
                <th style="background-color:#ea8457!important;padding=8px!important">Usuário</th>
                <th style="background-color:#ea8457!important;padding=8px!important">Texto</th>
                
            </tr>
            <?php
            include 'bd/conexao_mysqli.php';
            $sql = "SELECT * FROM mensagem";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT * FROM mensagem") or die(mysqli_error($strcon));
            while($dados = mysqli_fetch_array($resultado)){
            $data = $dados['data'];
            $hora = $dados['hora'];
            $usuario = $dados['usuario'];
            $texto = $dados['texto'];
            
            echo "<tr>
                   
                    <td>".$data."</td>
                    <td>"."$hora"."</td>
                    <td>"."$usuario"."</td>
                    <td>"."$texto"."</td>
                    
                    
                </tr>";
            }
           ?>
        
        </table>
    </body>
</html>


 