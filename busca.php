<?php  
  $dbname = "id3087752_cadastro";
  $usuario="id3087752_ifpe";
  $senha = "123456";
  try {
      $conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

$busca = $_POST['busca'];
// comando like com variavel 
// retorna todos os produtos que tenham o valor da variável busca em qualquer posição
$result = mysql_query("SELECT Cadastro_produtos FROM * WHERE marca like '%".$busca."%' ");
