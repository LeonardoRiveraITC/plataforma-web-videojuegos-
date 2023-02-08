<?php
session_start();
	if($_SESSION["logueado"] == TRUE) {
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $nombre = $_POST ["nombre2"];
        $sql = "delete from usuarios where id = '$nombre'";
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
