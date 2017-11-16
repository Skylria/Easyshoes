<?php  
	$dbname = "id3284881_cadastro";
	$usuario="id3284881_ifpe";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	    
	$pesquisar = $_POST['busca'];
	


$sql = "SELECT * FROM Cadastro_produtos WHERE marca LIKE '%:pesquisar%' OR codigo LIKE '%:pesquisar%'";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":pesquisar",$pesquisar);

$result = $stmt->execute();

$pesquisa = $stmt->rowCount();
var_dump($pesquisa);
if ($pesquisa == 0) {
    echo "Nenhum resultado!";
} else {
    // senão
    if ($pesquisa == 1) {
        echo "1 resultado encontrado!";
    }
    // se houver um resultado diz que existe um resultado
    if ($pesquisa > 1) {
        echo "$count resultados encontrados!";
    }
    // se houver mais de um resultado diz quantos resultados existem
    while ($dados = mysql_fetch_array($sql)) {
        // enquanto houverem resultados...
        echo "$dados[marca] $dados[codigo]<br>";
        // exibir a coluna nome e a coluna email
    }
}
?>
