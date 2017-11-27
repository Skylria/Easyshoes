<?php
$senha = $_POST['senha'];
if ($senha == "mestre4dmin") {
	header('location: pageadm.php');
}
else {
	header('location:../adm.php');
}

?>