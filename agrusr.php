<?php
session_start();
	if($_SESSION["logueado"] == TRUE) {
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $nombre = $_POST ["usuario"];
        $contra = $_POST ["contrasena"];
        $cr = $_POST ["creditos"];
        $sql = "insert into usuarios values ('$nombre','$contra',$cr,0)";
          if ($resultado = $con->query($sql)){
	    header ("Location:otro.html");	
        }
         else {
         header ("Location:Volver.html");
         }
		
	}
       else {
         header ("Location:Volver.html");
       }	

 ?>

