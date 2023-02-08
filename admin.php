<?php   
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		?>
		<!DOCTYPE html>
		
		<head>
			<meta charset="UTF-8">
			<title>Control de la cuenta</title>
                        <link rel="stylesheet" type="text/css" href="css.css" />

		</head>
		<body>
			<h1>Bienvenido <?php echo $_SESSION ["usuario"] ?></h1>	
                        <h2>Agregar sistema al inventario <h2>
                        <form action="agrinv.php" method="post" enctype="multipart/form-data">
 
      <input type="text" name="objeto"  placeholder="Inserte nombre del sistema"  required/>   
      <input type="number" name="creditos"  placeholder="Inserte costo en creditos" required/>
      <p> inserte una imagen</p>
      <input type="file" name="sisimag"  accept=".png, .jpg, .jpeg">
      <input type="submit" value="Enviar" />
      
    
</form>

      <h2>Eliminar objeto del inventario </h2>
      <form action="elinv.php" method="post">
      <input type="text" name="objeto2"  placeholder="Inserte nombre del sistema"  required/>   
      <input type="submit" value="Eliminar" />
    
</form>
                       
                        
                        <h2>Agregar usuario</h2>
                        <form action="agrusr.php" method="post">
       <input type="text" name="usuario"  placeholder="Inserte nombre del usuario"  required/>  
       <input type = "text" name = "contrasena" placeholder ="inserte su contrase&#241a" required/>
       <input type = "number" name = "creditos" placeholder = "inserte creditos iniciales" required/> 
       <input type="submit" value="Agregar" />
</form>
                        <h2>Eliminar usuario </h2>		
			
			      <form action="elusr.php" method="post">
        <input type="text" name="nombre2"  placeholder="Inserte nombre del usuario"  required/>   
        <input type="submit" value="Eliminar" />
               </form>
		   
		
                  <h2>Agregar premio al inventario <h2>
                  <form action="agrpr.php" method="post" enctype="multipart/form-data">
 
      <input type="text" name="premio"  placeholder="Inserte nombre del premio"  required/>   
      <input type="number" name="costo"  placeholder="Inserte costo en puntos" required/>
      <p> inserte una imagen</p>
      <input type="file" name="primag"  accept=".png, .jpg, .jpeg">
      <input type="submit" value="Enviar" />
      </form>
<h2>Eliminar premio del inventario <h2>
                  <form action="elpr.php" method="post" enctype="multipart/form-data">
 
      <input type="text" name="premio2"  placeholder="Inserte nombre del premio"  required/>   
      
      <input type="submit" value="Enviar" />
<h2><a href="salir.php">Salir</a></h2>	
      </form>
                </body>
		</html>
		<?php
	} else {
		 
           header("Location: html.php");
	}
 ?>
