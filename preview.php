
<!DOCTYPE HTML>
<head>
<title>Free Ecomm Template Website Template | Preview :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 270,
					thumb_image_height: 280,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="js/star-rating.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
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

						


					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
  		     
   		    </div>
          </div>
       <!------------End Header ------------>
         <!--inicio del php --> 
				     <?php
				     include "conexion.php";	
				     
				     $idprod =  $_GET['idpr'];  //variable enviadas por medio del link
				      $cont = $_GET['cont'] ;  //son almacenadas en varables nuevass
				     $idProducto=  $idprod[$cont]; //para realizar la busqueda del producto

				     $idProducto;


				     $consultar = mysqli_query($conexion,"SELECT * FROM `productos` inner join catgoria on productos.Catgoria_idCatgoria = catgoria.idCatgoria where  `idProduct` =  '$idProducto' ");
				     if($d = mysqli_fetch_array($consultar))	
						{
							$Imagen = $d['imagen'];
							$Nom= $d['Nombre_producto'];
							$desc =$d['Descripcion'];
							$pre= $d['Precio'];
							$Exis= $d['Cantidad'];
							$cate= $d['Categoria'];

echo "
   <div class='main'>
   	 <div class='wrap'>
   	 	<div class='preview-page'>
   	 	       <div class='section group'>
				<div class='cont-desc span_1_of_2'>
					<ul class='back-links'>
						<li><a href=''>Inicio</a> ::</li>
						<li><a href=''>Productos</a> ::</li>
						<li>Nombre del Producto</li>
						<div class='clear'> </div>
					</ul>
				  <div class='product-details'>	
					<div class='grid images_3_of_2'>
							<ul id='etalage'>
							<li>
								<a href='optionallink.html'>
									<img class='etalage_thumb_image' src='$Imagen' />
									<img class='etalage_source_image' src='$Imagen' title='' />
								</a>
							</li>
							
							</ul>
				     </div>
				     	";
				   

				  echo " 
				  <div class='desc span_3_of_2'>
					<center><h2>$Nom</h2></center>
					<p>$desc</p>					
					<div class='price'>
						<p>Precio: <span>Q.  $pre</span></p>
					</div>
					
					<div class='colors-share'>
				 	<div class='color-types'>
				 		<h4>Colores Disponibles</h4>
				 		<form class='checkbox-buttons'>
							<ul>
								
								<li><input id='r3' name='r1' type='radio'><label class='white' for='r3'> </label></li>
								<li><input id='r4' name='r1' type='radio'><label class='black' for='r4'> </label></li>
							</ul>
						 </form>
				 	</div>
				 	<div class='social-share'>
				 		<h4>Siguenos en:</h4>
				 			  <ul>
									<li><a class='share-face' href=''> </a></li>
									<li><a class='share-twitter' href=''> </a></li>
									
									<div class='clear'> </div>
						    </ul>
				 	</div>
				 	<div class='clear'></div>
				 </div>
			</div> ";
			
			echo "
			<div class='clear'></div>
		  </div>
		<div class='product_desc'>	
			<div id='horizontalTab'>
				<ul class='resp-tabs-list'>
					<li>Especificaciones</li>
					
					<div class='clear'></div>
				</ul>
				<div class='resp-tabs-container'>
					<div class='product-specifications'>
						<ul>
		                  <li><span class='specification-heading'>Categoria:</span> <span> $cate </span>
		                    <div class='clear'></div></li>
		                  <li><span class='specification-heading'>Modelo:</span> <span>  $Nom</span>
		                    <div class='clear'></div></li>
		                  <li><span class='specification-heading'>Existencias:</span> <span> $Exis</span>
		                    <div class='clear'></div></li>
		                  <li><span class='specification-heading'>Precio:</span> <span> $pre </span>
		                    <div class='clear'></div></li>
		                  <li><span class='specification-heading'>Descripcion</span> <span>  $desc </span></li>
		                  <li></li>
		                  <li>
		                    <div class='clear'></div>
	                      </li>
		                        </ul>
				 	</div>
				 
				   <div class='producttags'>
				     <h4>r Tags:</h4>
			      </div>
			  </div>";

}
				
				?>

			<!--fin del php --> 


		    </div>
	    </div>
      </div>
   	 	       </div>
 		 		</div>
   	 		</div>
   	 		
        </div>
        
     <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Derechos Reservados | Dinamite Group<a href="http://" target="_blank"></a> </p>
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

