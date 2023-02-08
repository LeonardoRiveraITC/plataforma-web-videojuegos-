<!doctype html>

<head>

<link rel="icon" href="imag/control2.png" />
<meta name="description" content="Bienvenido a GamersZone donde puedes disfrutar desde arcades originales hasta consolas modernas">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css.css" />

<title>Club de videojuegos</title>

<script src="javascript.js" type="text/javascript"></script>

</head>

<body>

<!-- Tab links y botones -->

<div class="tab">
  
<button class="tablinks" onclick="tabAccion(event, 'Juegos')"><img id = "img1" src  = imag/controlfix.png> </button>
  
<button class="tablinks" onclick="tabAccion(event, 'Premios')"><img id = "img2" src = imag/premios.png></button>
  
<button class="tablinks" onclick="tabAccion(event, 'Control')"><img id = "img3" src = imag/bd.png></button>


<button class="tablinks" onclick="tabAccion(event, 'Usuarios')"><img id = "img4" src = imag/usu.png></button>


</div>



<h1 id = "titulo">Bienvenido a GamersZone,navega atravez de la barra de opciones para encontrar lo que buscas</h1>
<div id="Juegos" class="tabcontenido">
  

        <?php
$con= new mysqli('localhost', 'root', '', 'db_club');
$con->set_charset("utf8");

$sql = "SELECT * FROM inventario";
$results = mysqli_query($con,$sql);

  echo "<table>";
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem[0] . "</td>";
    echo "<td>" . $rowitem[1] . "</td>";
    echo "<td>";
    echo "<img height=260 width=220 ";
    echo 'src="data:image/png;base64,'.base64_encode( $rowitem[2] ).'"/>';
    echo "</td>";
}
echo "</table>";
            ?>

</div>  


<div id="Premios" class = "tabcontenido">   
<?php

$sql2 = "SELECT * FROM premios";
$results2 = mysqli_query($con,$sql2);

  echo "<table>";
 while($rowitem2 = mysqli_fetch_array($results2)) {
    echo "<tr>";
    echo "<td>" . $rowitem2[0] . "</td>";
    echo "<td>" . $rowitem2[1] . "</td>";
    echo "<td>";
    echo "<img height=260 width=220 ";
    echo 'src="data:image/jpeg;base64,'.base64_encode( $rowitem2[2] ).'"/>';
    echo "</td>";
}
echo "</table>";
            ?>
</div>




<div id="Control" class="tabcontenido">
  
<h3>Ingresa a tu cuenta de empleado</h3>
 
      <form action="php2.php" method="post">
      <input type="text" name="empleado" placeholder="Empleado"  required/>   
      <input type="password" name="contrasenaemp" placeholder="Password" required />   
     
      <input type="submit" value="Ingresar" />
</form>
</div>

<div id="Usuarios" class="tabcontenido">
  
<h3>Ingresa a tu cuenta de jugador</h3>

      <form action="php.php" method="post">
 
      <input type="text" name="usuario"  placeholder="Usuario"  required/>   
      <input type="password" name="contrasena"  placeholder="Password" required/>   

      <input type="submit" value="Ingresar" />
      
</form>	 
</div>

</body>
</html>


