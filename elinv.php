<?php
session_start();
	if($_SESSION["logueado"] == TRUE) {
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $nombre = $_POST ["objeto2"];
        $sql = "delete from inventario where id = '$nombre'";
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

