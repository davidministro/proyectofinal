<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

 
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
							
					</div>
			     <div class="clear"></div>
  		    </div>     
  		    


  		      <div class="navigation">
  		    		<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.php">INICIO</a>
						</li>
						
<!---------------- inicio  del bloqueo de la barra de navegacion -->




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
									<a href="">necesita logearse para seguir viendo nuestros productos</a>
								</li>
								<li>
									<a href=""> Accessorios</a>
								</li>
							</ul>
						</li>




						<li>
							<a href="#">SMARTPHONES</a>
							<ul>
								<li>
									<a href="#">Smartphones</a>
									
								</li>
								
							</ul>
						</li>
						



						<li>
							<a href="#">VIDEOJUEGOS</a>
							<ul>
								<li><a href="#"p>PlayStation</a></li>
								<li><a href="#">Xbox 360</a></li>
								
								
							</ul>
						</li>



						<li>
							<a href="#">IMAGEN/SONIDO</a>
							<ul>
								<li>
									<a href="#">Imagen</a>
								</li>
								<li>
									<a href="#">Sonido</a>
								</li>
								
							</ul>
						</li>



<!---------------- fin del bloqueo de la barra de navegacion -->

						<li>
							<a href="#">NOSOTROS</a>
							<ul>
								<li>
									<a href="vision.php">Vision</a>

								</li>
								<li>
									<a href="mision.php">Mision</a>
									
								</li>
								
							</ul>
							</li>





<!---------------- fin del boton administrar-->

<!------------- fin del boton administrar-->					  
				

					  <li> <a href="loginmejorado.php">LOGIN </a></li>
						</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
<!------------- inicio del formularo del login-->					  


<br><br>	
<center>    

 <body class="align">

  <div class="site__container">

    <div class="grid__container">

<form action ="" method="post"  enctype="multipart/form-data" class="form-horizontal" role="form">
				<center>	<h2>INSERTAR USUARIOS</h2> </center>
			


<?php 
	include("conexion.php");

	 ?>


					
				

			   	 

			<div class="form-group">
			   	  <br><br><br>
			   	    <label class="col-lg-2 control-label"><strong>Nombres</strong></label>
			   	   <div class="col-lg-6"> <input class="form-control" type="text" name="txtNombres" id="NomProducto">  </div>
		   	      
		   	      </div>

			   	  <div class="form-group">
			   	  
			   	    <label class="col-lg-2 control-label"><strong>Apellidos</strong></label>
			   	    <div class="col-lg-6">  <input class="form-control" type="text" name="txtApellidos"id="CodProducto" > </div>
			   	 
			   	  </div>


			   	 <div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Telefono</strong></label>
			   	    <div class="col-lg-6"> <input class="form-control" type="text" name="txtTelefono" id="PrecioProducto"></div>
			   	 </div>

                 <div class="form-group">
			   	    <label class="col-lg-2 control-label" ><strong>Direccion</strong></label>
                    <div class="col-lg-6"> <input class="form-control" type="text" name="txtDireccion" id="CantProducto" > </div>
                  </div>

                  <div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Usuario</strong></label>
                    <div class="col-lg-6"> <input class="form-control"  name="txtUsuario" id="DescProducto"></div>
                  </div>


					<div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Contraseña</strong></label>
                    <div class="col-lg-6"> <input class="form-control" name="txtContraseña" id="DescProducto"></div>
                  </div>

						
                  <button  name="Guardar" id="Guardar" type="submit"   class="btn btn-primary">Guardar</button>
                  <button  name="Cancelar" id="Cancelar" type="submit" class="btn btn-primary" >Cancelar</button>
						
<?php 
include "conexion.php";
	if (isset($_POST['Guardar'])) //si presionamos el boton eviar
	 {
	 		$c1=$_POST['txtNombres'];
	 		$c2=$_POST['txtApellidos'];
	 		$c3=$_POST['txtTelefono'];
	 		$c4=$_POST['txtDireccion'];
	 		$c5=$_POST['txtUsuario'];
			$c6=$_POST['txtContraseña'];


	 		$insertar = "INSERT INTO usuario(Nombres,Apellidos,Telefono,Direccion,Usuario,Password,TipoUsuario_idTipoUsuario) 
	 		VALUES ('$c1','$c2','$c3','$c4','$c5','$c6','2')";
	 		if(mysqli_query($conexion,$insertar)){
			echo '<script>alert("DATOS GUARDADOS")</script>';
			echo " <script> location.href = 'loginmejorado.php' </script> ";
			
				}
				else {
					echo " <h2>Fallo en Guardado </h2> ";
				}

	
	 }
	 if (isset($_POST['Cancelar'])) 
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=loginmejorado.php'>";
		}

	  ?>

                  
                    



</div>

  </div>

</body>

<!------------- fin d el formulario del login-->					  
  		    
</center>

</body>
</html>

