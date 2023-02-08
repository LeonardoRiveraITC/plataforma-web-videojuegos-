<?php
$con= new mysqli('localhost', 'root', '', 'db_club');
$con->set_charset("utf8");

if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL";
}


$usuario = $_POST["empleado"];


$sql = "SELECT * FROM empleados WHERE id = '$usuario'";
			$loginNombre = $_POST["empleado"];
			$loginPassword = $_POST["contrasenaemp"];
			
			if($resultado = $con->query($sql)) {
				while($row = $resultado->fetch_array()) {
					$userok = $row[0];
					$passok = $row[1];
                                      
				}
				$resultado->close();
			}
			$con->close();
			
                               if(isset($loginNombre) && isset($loginPassword)) {
				if($loginNombre == $userok && $loginPassword == $passok) {
                      		session_start();
					$_SESSION["logueado"] = TRUE;
                                        $_SESSION["usuario"] = $loginNombre;
   
					header("Location: admin.php");
				}
				else {
				   header ("Location:Volver.html");
                                   

				}
			
		}
		
?>
