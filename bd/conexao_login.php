<?php
session_start();
$_SESSION['usuario'] = "";
$_SESSION['logado']=false;
include "conexaogeral.php";
$login = $_POST['usuario'];
$senha = $_POST['senha'];
$stmt = $conn->prepare('SELECT * FROM cadastro WHERE U_LOGIN = ? AND U_SENHA = ?');
$stmt->bindParam(1,$login);
$stmt->bindParam(2,$senha);
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);
if ($dados == NULL){
    header('location:../login.php');
}
else {
        $_SESSION['logado']= true;
        $_SESSION['cargo'] = $dados['U_CARGO'];
        $_SESSION['usuario'] = $dados['U_LOGIN'];
        if($dados['U_CARGO'] == "adm"){
            header('location:../pageadm.php');
        }
        else{
            header('location:../pagina_funcionario.php');
        }
}        
?>
</body>
</html>
