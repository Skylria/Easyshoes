        <?php
        $id = $_GET['id'];
        $cargo = $_POST['cargo'];
        include 'conexaogeral.php';
        $stmt = $conn->prepare("UPDATE cadastro SET U_CARGO = ? WHERE U_id = ?");
        $stmt->bindParam(1,$cargo );
        $stmt->bindParam(2,$id);
        $stmt->execute();
       echo "Alterado com Sucesso! <a href='../user.php'>Voltar aos Usuários </a>";
        ?>
