<?php
session_start();
	if($_SESSION["log"] == TRUE) {
		?>
<!DOCTYPE html>
 
 <head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css.css" />

 </head>
 <body>
<h1>&iquestEstas seguro?</h1>
<h1>Esta acci&#243n no puede revertirse,perderas todos tus creditos,puntos y id de usuario </h1>
<form action = "eliminar.php" method = "post">
 <input type="submit" value="Eliminar" />
 </form>
<p><a href="salir.php">Salir</a></p>
 </body>
 </html>
<?php
	} else {
		header ("Location:Volver.html");
	}
 ?>

