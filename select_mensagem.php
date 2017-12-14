
<!DOCTYPE html>
<html lang="en">
    <head>
    
      <link rel="stylesheet" type="text/css" href="css/produtos.css">
      </head>
        <table class="quadrado">
            <tr>
                <th>Data</th>
                <th>Hora</th>
                <th>Usuário</th>
                <th>Texto</th>
                
            </tr>
        <?php
        $host = "localhost";
        $usuario = "id3284797_easyshoes";
        $senha = "123456";
        $bd = "id3284797_login";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
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


 
