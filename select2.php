       <link rel="stylesheet" type="text/css" href="css/produtos.css">
       <meta charset="utf-8">
          <table class="table table-striped table-dark">
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cargo</th>
            </tr>
        <?php
            $host = "localhost";
        $usuario = "id3284797_easyshoes";
        $senha = "123456";
        $bd = "id3284797_login";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM cadastro";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT U_id, U_NOME,U_TELEFONE,U_EMAIL, U_Foto, U_CARGO FROM cadastro") or die(mysqli_error($strcon));
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $foto = $dados['U_Foto'];
        $nome = $dados['U_NOME'];
        $telefone = $dados['U_TELEFONE'];
        $email = $dados['U_EMAIL'];
        $cargo = $dados['U_CARGO'];
        $id = $dados['U_id'];
        echo "<tr>
                
                <td><img src='uploads/".$foto."' width='200px' alt='perfil'></td>
                <td>".$nome."</td>
                <td>"."$telefone"."</td>
                <td>"."$email"."</td>
                <td>"."$cargo"."<a href='bd/editadefinicao.php?id=".$id."'>edit</a></td>
                
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
