<?php
$con= new mysqli('localhost', 'root', '', 'db_club');
$con->set_charset("utf8");

if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL";
}

$usuario = $_POST["usuario"];


$sql = "SELECT * FROM usuarios WHERE id = '$usuario'";
			$loginNombre = $_POST["usuario"];
			$loginPassword = $_POST["contrasena"];
			
			if($resultado = $con->query($sql)) {
				while($row = $resultado->fetch_array()) {
					$userok = $row[0];
					$passok = $row[1];
                                       
                                        $creditos=$row[2];
                                        $puntos = $row[3];
				}
				$resultado->close();
			}
			$con->close();
			
                               if(isset($loginNombre) && isset($loginPassword)) {
				if($loginNombre == $userok && $loginPassword == $passok) {
                      		session_start();
                             
					$_SESSION["log"] = TRUE;
                                        $_SESSION["usuario"] = $loginNombre;
               
                                        $_SESSION["creditos"] = $creditos;
                                        $_SESSION["puntos"] = $puntos;
                                        
					header("Location: nuevo.php");
				}
				else {
                                   
                                   header ("Location:Volver.html");	
                                   

				}
			
		}
		
?>


