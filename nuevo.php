<?php   
	session_start();
	if($_SESSION["log"] == TRUE) {
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Control de la cuenta</title>
                        <link rel="stylesheet" type="text/css" href="css.css" />

                 
                        
		</head>
		<body>
			<h1>Bienvenido <?php echo $_SESSION ["usuario"] ?></h1>	
                             <h2><a href="salir.php">Salir</a> </h2> 	
                        <h3>Creditos totales  <?php echo $_SESSION ["creditos"] ?></h3>
                        <h3>Puntos totales  <?php echo $_SESSION ["puntos"] ?></h3>	
                  	
						
			              <h2> Eliminar cuenta </h2>
                         <form action = "seguro.php" method = "post">
                          <input type="submit" value="Eliminar Cuenta" />
                         </form>
						 <h2> Realizar compra </h2>
                         <form action = "compra.php" method = "post">
						 
						 <?php
						 
$con= new mysqli('localhost', 'root', '', 'db_club');
$con->set_charset("utf8");
$var = $_SESSION ["creditos"];
$sql = "SELECT id FROM premios where costo < $var";
$results = mysqli_query($con,$sql);

  echo "<select name='premio'>";
 while($rowitem = mysqli_fetch_array($results)) {
	 
    echo "<option>"  .$rowitem[0]."</option>";
}

    echo "</select>";
?>
                         <input type="submit" value="Realizar compra" />
                         </form>			 
	 <h2> Tabla de compras realizadas </h2>					

 <?php
						 
$usuario = $_SESSION ["usuario"];
$sql2 = "select * from compra where idusuario = '$usuario'";
$results2 = mysqli_query($con,$sql2);

  echo "<table>";
 while($rowitem2 = mysqli_fetch_array($results2)) {
    echo "<tr>";
    echo "<td>" . $rowitem2[0] . "</td>";
    echo "</tr>";
  
}
echo "</table>";

            ?>
?>
		</body>
		</html>
		<?php
	} else {
		header("Location: html.php");
	}
 ?>
