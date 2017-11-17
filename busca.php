
<?php  
if(isset($_POST['palavra-busca'])){
	$busca = $_POST['palavra-busca'];

$sql = "SELECT * FROM Cadastro_produtos WHERE marca LIKE '%$busca%'";
	}
	else{
		$sql = "SELECT * FROM Cadastro_produtos ";
}

	$dbname = "id3284881_cadastro";
    $usuario="id3284881_ifpe";
    $senha = "123456";
	try {
    $result = $conexao->prepare($sql);
	$result-> execute();
	$totalRegistros = $result->rowCount();

	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 while ($dados = mysql_fetch_array($sql)) {
        // enquanto houverem resultados...
        echo "$dados[marca] $dados[codigo]<br>";
        // exibir a coluna nome e a coluna email
    }
?>
