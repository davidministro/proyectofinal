<?php 
include "conexion.php";	
session_start();
if (!$_SESSION) {
	header("location: portada.php");
}

 ?>



<!DOCTYPE HTML>
<head>
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
							  	<span>Nombre: <?php echo $_SESSION['nombre']; ?></span><br>
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
								<li><a href="play.php"p>PlayStation</a></li>
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


					

<?php 
	
if ($_SESSION['idTipo'] == 2) {
	//echo "Restringido";

} else
{


 ?>

<!---------------- fin del boton administrar-->

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


<?php 
}
 ?>
				
<!------------- fin del boton administrar-->					  

					  
						</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
	


  		    
  		     <div class="header_bottom">
			   <div class="slider-text">
			   	<h2>X-tech <br/>Un mundo en tecnologia</h2>
			   	<p>Viva la experiencia X-tech , visitando nuestro catalogo de productos<br/></p>
			   	

			   	<h2>Descripcion<br/>
			   	<p>
			   		Aquí encontrara servicios varios relacionados al mundo de la informatica, a si mismo suministros y accesorios computacionales
			   	</p>
			   	</h2>


				
			   	<h2>Direccion<br/>
			   	<p>
			   		San Pedro Sacatepequez , San Marcos</br>	
					Correo electrónico x-tech@hotmail.com,x-tech@gmail.com
			   	</p>
			   	</h2>
			   	<a href="#">Visitanos</a>


	  	      </div>
	  	      <div class="slider-img">
	  	      	<img src="images/slider-img.png" alt="" />
	  	      </div>
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Ultimos Productos</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">

			                   <a href="#" title="img2"> <img src="images/10311.jpg" alt="" /><p>Computadoras</p></a>
			                   <a href="#" title="img3"> <img src="images/wifi.jpg" width="300" height="300" alt="" /><p>Impresoras</p></a>
			                   <a href="#" title="img4"> <img src="images/3.jpg" width="300" height="300" alt="" /><p>Portatiles</p></a>
			                   <a href="#" title="img5"> <img src="images/tablet.jpg" width="300" height="300" alt="" /><p>Tablets</p></a>
			                   <a href="#" title="img6"> <img src="images/cel.jpg" width="300" height="300" alt="" /><p>Smartphones</p></a>
			                   <a href="#" title="img2"> <img src="images/escritorio.jpg" width="300" height="300" alt="" /><p>Escritorios</p></a>
			                   <a href="#" title="img3"> <img src="images/audifonos.jpg" width="300" height="300" alt="" /><p>Audifonos</p></a>
			                   <a href="#" title="img4"> <img src="images/play.jpg" width="300" height="300" alt="" /><p>Videojuegos</p></a>
	
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>X-tech te ofrece</h3>
							      <li><a href="#">computadoras de escritorio</a></li>
							      <li><a href="#">portatiles</a></li>
							      <li><a href="#">tablets</a></li>
							      <li><a href="#">telefonia movil</a></li>
							      <li><a href="#">telefonica fija</a></li>
							       <li><a href="#">videojuegos</a></li>
							       <li><a href="#">	proyectores</a></li>
							       <li><a href="#">audio/sonido</a></li>
							       <li><a href="#">y mucho mas</a></li>
						  	 </ul>
						</div>		
						<div class="buters-guide">
						<h3>x-tech</h3>
						<p><span>Te garantiza la mejor calidad en todos nuestros productos</span></p>	
						<p>No lo pienses mas ... </p>
						<p>somos tu mejor opcion</p>
					  </div>	
					  <div class="add-banner">
					  	<img src="images/camera.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Electronicos</h4>
					  	    <a href="#">Mas informacion</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
					    <div class="add-banner add-banner2">
					  	<img src="images/computer.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Computadoras</h4>
					  	    <a href="#">Mas informacion</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Buscar en Todas Las Categorias</h3>
	            <div class="section group">
				
				  <?php
				include "conexion.php";	
								
					$consultar = mysqli_query($conexion,"select * from productos
					");
                	$a =1;// acumulador para el arreglo donde se almacenara el id del producto 
				
				while($imagenes=mysqli_fetch_array($consultar))
				{
					$Nombre = $imagenes['Nombre_producto'];
					$Precio = $imagenes['Precio'];
					$Imagen = $imagenes['imagen'];
					$idProdu = $imagenes['idProduct'];
					
					echo "
					<div class='grid_1_of_4 images_1_of_4'>
					 <h4><a href='preview.php?cont=$a&idpr[$a]=$idProdu' > $Nombre </a></h4>
					  <a href='preview.php?cont=$a&idpr[$a]=$idProdu'><img src='$Imagen'  WIDTH=170 HEIGHT=180 alt='' /></a>
					  <div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'>$Precio </span></p>
					    </div>
					       		<div class='add-cart'>								
									<h4><a href='preview.php?cont=$a&idpr[$a]=$idProdu'>Mas Informacion</a></h4>
							     </div>
							 <div class='clear'></div>
					</div>
                                      					 
				</div>

				";

				$a += 1;//acumulador sumando 1
				}//fin de while
				?>
	            </div>
			   <div class="section group"></div>
			   <div class="section group"></div>
			    <div class="product-articles">
			      <h3>Todas las Categorias</h3>
			      <ul>
			      	<li>
			      <div class="article">
			      	
			      </div>
			      </li>
			      <li></li>
			      </ul>
			    </div>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
   <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | X-Tech<a href="http://w3layouts.com" target="_blank"></a> </p>
		   </div>
   	  </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

