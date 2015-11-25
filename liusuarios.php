<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
  <meta charset="UTF-8">
  <meta name="viewport" content="widht=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="js/script.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>
<body>
	<div class="header">


		<div class="indication">
			<br><b>SIGUENOS</b></br>
			<a href="https://www.facebook.com"><img src="images/facebook.ico" width="30" height="30"></a>
		<a href="https://twitter.com"><img src="images/twitter.ico" width="30" height="30"></a>
		</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" w /></a>
					</div>
						<div class="header_top_right">
							  <div class="search_box">
							  	<span>Buscar</span>
					     		<form>
					     			<input type="text" value=""><input type="submit" value="">
					     		</form>
					     		<div class="clear"></div>
					     	</div>
					     	<span> <button><a href="cerrarsesion.php">Cerrar Sesion</a></span><br></button>
					</div>
			     <div class="clear"></div>
  		    </div>     
  		    
			<div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.php">INICIO</a>
						</li>
						<li  class="test">
							<a href="#">INFORMÁTICA</a>
							<ul>
								<li>
									<a href="pc.php">PC's</a>
									
								</li>
								<li>
									<a href="portatiles.php">Portatiles</a>									
									
								</li>
								<li>
									<a href="tablet.php">Tablets</a>
								</li>
								<li>
									<a href="accesorios.php"> Accessorios</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">SMARTPHONES</a>
							<ul>
								<li>
									<a href="movil.php">Smartphones</a>
									
								</li>
								
							</ul>
						</li>
						<li>
							<a href="#">VIDEOJUEGOS</a>
							<ul>
								<li><a href="play.php">PlayStation</a></li>
								<li><a href="xbox.php">Xbox 360</a></li>
								
								
							</ul>
						</li>
						<li>
							<a href="#">IMAGEN/SONIDO</a>
							<ul>
								<li>
									<a href="imagen.php">Imagen</a>
								</li>
								<li>
									<a href="sonido.php">Sonido</a>
								</li>
								

							</ul>
						</li>
						


                          <li> <a href="#">ADMINISTRADOR </a>
						  <ul>
						   
								<li>
									<a href="insertarproducto.php">Ingresar Producto</a>
									
								</li>
								<li>
									<a href="eliminarproducto.php">Eliminar Producto</a>
									
								</li>
								<li>
									<a href="buscarproducto.php">Modificar Producto</a>
									
								</li>
                              
					      </ul>
					  </li>

						<li>
							<a href="#">VER</a>
							<ul>
								<li>
									<a href="liproductos.php">Lista de productos</a>

								</li>
								<li>
									<a href="licategorias.php">Lista de categorias</a>
									
								</li>

								<li>
									<a href="liusuarios.php">Lista de usuarios</a>
									
								</li>


</ul>


					  </li>






















					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>


<center>	<h2>DATOS GENERALES DE LOS USUARIOS</h2> </center>

<br>
<br>



		<?php 
include "conexion.php";



                    $query = "SELECT * from usuario WHERE 1 ";
    				$record = mysqli_query($conexion,$query);
				    $registro = mysqli_fetch_array($record);

	
		
		
		echo "<table border=4 class='table table-hover'>";
	



	echo 	
	
					"<tr> 
						
						<td><b>ID_USUARIO</b></td>
						<td><b>NOMBRES</b></td>
						<td><b>APELLIDOS</b></td>
						<td><b>TELEFONO</b></td>
						<td><b>DIRECCION</b></td>
					</tr>";	

		
	do{
			
			$v1 = $registro['idUsuario'];
  			$v2 = $registro['Nombres'];
  			$v3 = $registro['Apellidos'];
  			$v4 = $registro['Telefono'];
  			$v5 = $registro['Direccion'];

			
			echo "<tr>
			<td> $v1 </td>
			 <td> $v2 </td>
			 <td> $v3 </td>  
			 <td> $v4 </td> 
			 <td> $v5 </td> 
			    </tr>";

	}
	while($registro=mysqli_fetch_array($record));
	echo "</table>";
 ?>


	<center><a href="javascript:window.print()"> Imprimir listado de usuarios</a>

<a href="javascript:window.print()"><img src="images/impriir.jpg" width="40" height="40" alt="" /></a>
</center>



  		     
   
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>



