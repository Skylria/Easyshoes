<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        table {
            border: 1px solid black;
        }
        
    </style>
</head>
<body>

<?php
echo "<table class='table table-striped table-dark'>";
 echo "<tr><th>Marca</th><th>Cor</th><th>Número</th><th>Quantidade</th><th>Preço</th><th>Categoria</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$dbname   = "id3284881_cadastro";
$username= "root";
$password  = "";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT marca, cor,numero,quantidade, preco, categoria FROM Cadastro_produtos"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

echo "</table>";

   
  

?> 

</body>
</html>
