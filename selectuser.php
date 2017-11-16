<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="css/produtos.css">
    </head>
    <body>
        <?php
        echo "<table style='border: solid 1px black;'>";
         echo "<tr><th>Nome</th><th>Cpf</th><th>Telefone</th><th>Email</th><th>Login</th></tr>";
        class TableRows extends RecursiveIteratorIterator { 
            function __construct($it) { 
                parent::__construct($it, self::LEAVES_ONLY); 
            }
            function current() {
                return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
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
        $username= "id3284881_ifpe";
        $password  = "123456";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT U_NOME,U_CPF,U_TELEFONE,U_EMAIL,U_LOGIN FROM cadastro WHERE U_LOGIN='usuario"); 
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