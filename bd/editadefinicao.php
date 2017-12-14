<link rel="stylesheet" type="text/css" href="css/produtos.css">
       <meta charset="utf-8">
        <?php
        $id = $_GET['id'];
        $host = "localhost";
        $usuario = "id3284797_easyshoes";
        $senha = "123456";
        $bd = "id3284797_login";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM cadastro WHERE U_id = $id";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT U_id, U_NOME, U_CARGO FROM cadastro WHERE U_id = $id") or die(mysqli_error($strcon));
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $nome = $dados['U_NOME'];
        $cargo = $dados['U_CARGO'];
        $id = $dados['U_id'];
        echo "<p>Nome: ".$nome."</p>
            <p>Cargo Anterior: "."$cargo"."</p>
            <p>Novo Cargo: </p>
            <form action='editadefinicao2.php?id=".$id."' method='POST'>
                <select name='cargo'>
                   <option value=".$cargo." selected>".$cargo."</option>
                   <option value='funcionario'>Funcionário</option>
                   <option value='gerente'>Gerente</option>
                   <option value='adm'>Administrador</option>
                </select>
                <input type='submit' value='alterar'>
            </form>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>
