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
						









					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
  		     

				

					
					<div class="content-bottom-right">
    	    	<h3>Play Station</h3>
	            <div class="section group">
	            	
	            	<?php
				include "conexion.php";	
								
					$consultar = mysqli_query($conexion,"SELECT * FROM productos inner join catgoria on	Catgoria_idCatgoria = idCatgoria WHERE Categoria = 'PlayStation'
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
<h3>¡ X-tech , un mundo en tecnologia !</h3>
			      <ul>
			      	<li>
			      <div class="article">







			   	<a href="#">Somos tu mejor opcion ...</a>
	  	      </div>
	  	      
	  	     <div class="clear"></div>
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



