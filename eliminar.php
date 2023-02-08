<?php
session_start();
	if($_SESSION["log"] == TRUE) {
$con= new mysqli('localhost', 'root', '', 'db_club');
$con->set_charset("utf8");

if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL";
}
$sen = $_SESSION ['usuario'];
$sql = "delete FROM usuarios WHERE id = '$sen'";

			$resultado = $con->query($sql);          
                        header("Location: html.php");
		?>

<?php
	} else {
		header("Location: html.php");
	}
$con->close();
 ?>

