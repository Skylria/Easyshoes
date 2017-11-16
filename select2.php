<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/produtos.css">
    </head>
    <body>
        
          <table class="quadrado">
            <tr>
                
                <th>   </th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        <?php
        $host = "localhost";
        $usuario = "id3284881_ifpe";
        $senha = "123456";
        $bd = "id3284881_cadastro";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM cadastro";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT U_NOME,U_TELEFONE,U_EMAIL, U_Foto FROM cadastro") or die(mysqli_error($strcon));
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $nome = $dados['U_NOME'];
        $telefone = $dados['U_TELEFONE'];
        $email = $dados['U_EMAIL'];
        $foto = $dados['U_Foto'];
        echo "<tr>
                
                <td><img src='uploads/".$foto."' width='200px'></td>
                <td>".$nome."</td>
                <td>"."$telefone"."</td>
                <td>"."$email"."</td>
                
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
    </body>
</html>