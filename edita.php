<?php
require 'conexao.php';

$sql = 'UPDATE cadastro SET U_NOME=:U_NOME, U_TELEFONE=:U_TELEFONE, U_EMAIL=:U_EMAIL, preco=:preco'; $sql .= 'WHERE nome = :nome';
$stm = $conexao->prepare($sql); $stm->bindValue(':U_NOME', $nome); $stm->bindValue(':U_TELEFONE', $telefone); $stm->bindValue(':U_EMAIL', $email); $stm->bindValue(':U_CPF', $cpf); $stm->bindValue(':U_LOGIN', $login); $stm->bindValue(':U_SENHA', $senha);
 $retorno = $stm->execute();

if ($retorno): echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> "; else: echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> "; endif;
echo "<meta http-equiv=refresh content='3;URL=pagina_funcionario.php'>";  
?>