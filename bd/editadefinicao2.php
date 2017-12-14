        <?php
        $id = $_GET['id'];
        $cargo = $_POST['cargo'];
        $usuario = "id3284797_easyshoes";
        $senha = "123456";
        $con = new PDO("mysql:host=localhost;dbname=id3284797_login", $usuario, $senha); 
        $stmt = $con->prepare("UPDATE cadastro SET U_CARGO = ? WHERE U_id = ?");
        $stmt->bindParam(1,$cargo );
        $stmt->bindParam(2,$id);
        $stmt->execute();
       echo "Alterado com Sucesso! <a href='../user.php'>Voltar aos Usuários </a>";
        ?>
