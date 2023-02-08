<?php
session_start();
	if($_SESSION["logueado"] == TRUE) {
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $nombre = $_POST ["premio2"];
        $sql = "delete from premios where id = '$nombre'";
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

