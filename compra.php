<?php
session_start();
	if ($_SESSION ["log"] == TRUE){
        $con= new mysqli('localhost', 'root', '', 'db_club');
        $con->set_charset("utf8");
        $premio = $_POST ["premio"];
        $usr = $_SESSION ["usuario"];
        $sql1 = "select  * from premios where id = '$premio'"; 
        $resultado1 = $con->query($sql1);
        $row=mysqli_fetch_row($resultado1);
        $sql = "update usuarios set creditos = puntos - $row[1] where id = '$usr'";   
        if ($resultado = $con->query($sql))
        $sql2 = "insert into compra values('$premio','$usr')";
        if($resultado2 = $con->query($sql2)){
         header ("Location:nuevo.html");
}
else {
 header ("Location:Volver.html");
}
}
else {
 header ("Location:Volver.html");
}

   
?>

  
