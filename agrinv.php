<?php
session_start();
	if($_SESSION["logueado"] == TRUE) {
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $nombre = $_POST ["objeto"];
        $costo = $_POST ["creditos"];
        $imag = $_FILES ["sisimag"] ['name'];
      $target_path = "imag/"; 
      $target_path = $target_path . basename($_FILES['sisimag']['name'], $target_path); 
       if(move_uploaded_file($_FILES['sisimag']['tmp_name'], $target_path)) { 
          $sql = "insert into inventario (id,costo,imagen) values ('$nombre',$costo,LOAD_FILE('C:/xampp/htdocs/algo2/imag/$imag'))";
          if ($resultado = $con->query($sql)){
	    header ("Location:otro.html");	
             }
        else {
          header ("Location:volver.html");
          }
} 
else {
header ("Location:volver.html");
}

         
}
else {
header ("Location:volver.html");
}
       
 ?>

