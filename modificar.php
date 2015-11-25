<?php
include "conexion.php";	
 
			$vcodProd	= $_POST['CodProducto'];
			 $id=$_GET['CodProducto'];
			 if (!$vcodProd)
			 {
			 	$vcodProd=0;
			 		$query = "SELECT * FROM productos inner join catgoria on Catgoria_idCatgoria = idCatgoria WHERE `idProduct` = '$id'";


    				$record = mysqli_query($conexion,$query);
    			$dato = mysqli_fetch_array($record);


			 }
			  else {
			  	$id=0;

			 	$query = "SELECT * FROM productos inner join catgoria on Catgoria_idCatgoria = idCatgoria WHERE `Codigo` = '$vcodProd'";

    				$record = mysqli_query($conexion,$query);
    			$dato = mysqli_fetch_array($record);
			 	
			 }
					
					
					  


		
 ?>




<!DOCTYPE HTML>
<head>
<title>Xtech</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

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
					     		<form >
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
						<li  class="test">
							<a href="#">INFORMÁTICA</a>
							<ul>
								<li>
									<a href="pc.php">PC</a>
									
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
								<li>
									<a href="fija.php">Telefonia fija</a>

								</li>
							</ul>
						</li>
						<li>
							<a href="#">VIDEOJUEGOS</a>
							<ul>
								<li><a href="play.php">PlayStation</a></li>
								<li><a href="xbox.php">Xbox 360</a></li>
								<li><a href="wii.php">Nintendo Wii</a></li>
								<li><a href="psp.php">PSP</a></li>
								
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
								<li>
									<a href="reproductores.php">Reproductores</a>
								</li>
                                
                                <li>
									<a href="Au.php">Audio Portatil</a>
								</li>
                                
                                <li>
									<a href="accesorios1.php">Accesorios</a>
								</li>


							</ul>
						</li>
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
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    

  		    </div>
  		    
			   	<form method="post"  enctype="multipart/form-data" class="form-horizontal">
 <h1><center>Modificar Producto</center></h1>
<br><br>
			   	  <div class="form-group">
			   	  <input type="hidden" name="id1" id="id1" value="<?php echo $dato['idProduct']; ?>">
			   	  </div>

					<div class="form-group">
					<label class="col-lg-2 control-label"><strong>  Nombre Del Producto:</strong></label>
			   	    <div class="col-lg-6"> 
			   	    <input class="form-control" type="text" name="NomProducto" id="NomProducto" value="<?php echo $dato['Nombre_producto']; ?>">
		   	      	</div>
		   	      	</div>

		   	       <div class="form-group">
                  <label class="col-lg-2 control-label"for="imagen">Imagen:</label>
			   	  <div class="col-lg-6"> 
			   	  <input class="form-control" type="text" readonly="readonly" name="imagen" id="imagen"  value="<?php echo $dato['imagen']; ?>">
				  
	               	<img src="<?php echo $dato['imagen']; ?>" height="175px">
                    
                  </div><a href="cambiarimg.php?id=<?php echo $dato['idProduct']; ?>">Cambiar Imagen</a>
                  </div>

                       

	

                 <div class="form-group">
			   	    <label class="col-lg-2 control-label">Categoria:</label>
			   	    
					<div class="col-lg-1"> 
					<input class="form-control" type="text" readonly="readonly" name="cate" id="cate"  value="<?php echo $dato['Catgoria_idCatgoria']; ?>">
					
					</div>
					<div class="col-lg-3"> 
					
					<input class="form-control" type="text" readonly="readonly" name="nomcate" id="nomcate"  value="<?php echo $dato['Categoria']; ?>">
					</div><a href="cambiarcate.php?id=<?php echo $dato['idProduct']; ?>">Cambiar Categoria</a>	 
                  </div>
	


			   	 <div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Codigo:</strong></label>
			   	    <div class="col-lg-6"> 
			   	    <input class="form-control" type="text" name="CodProducto"id="CodProducto" value="<?php echo $dato['Codigo']; ?>">
			   	  	</div>
			   	  	</div>


			   	  <div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Precio:</strong></label>
			   	    <div class="col-lg-6"> 
			   	    <input  class="form-control" type="text" name="PrecioProducto" id="PrecioProducto" value="<?php echo $dato['Precio']; ?>">
			   	  	</div>
			   	  	</div>


			   	  <div class="form-group">
			   	    <label class="col-lg-2 control-label" ><strong>Cantidad Existencias:</strong></label>
                    <div class="col-lg-6"> 
                    <input class="form-control" type="text" name="CantProducto" id="CantProducto"  value="<?php echo $dato['Cantidad']; ?>">
                  	</div>
                  	</div>


                  <div class="form-group">
			   	    <label class="col-lg-2 control-label"><strong>Descripcion:</strong></label>
                    <div class="col-lg-6"> 
                    <textarea class="form-control" cols="15" rows="10" name="DescProducto" id="DescProducto"><?php  echo $dato['Descripcion']; ?> </textarea>
                  	</div>
                  	</div>
                  
                     
                                                   
                 
                  
                  <div class="form-group"><div class="col-lg-6"><center>
                    <button  name="Actualizar" id="Actualizar" type="submit" class="btn btn-primary">Actualizar </button>
                    <button  name="Cancelar" id="Cancelar" type="submit" class="btn btn-primary">Cancelar  </button>
                    </center></div></div>
                  
		   	     </form>
                 
                


                <?php

	
	if (isset($_POST['Actualizar'])) {
	

echo "<h2>Actualizando</h2>";
	
	$id1 = $_POST['id1'];
    $vnomProd = $_POST['NomProducto'];
	$vcodProd	= $_POST['CodProducto'];
	$vprecProd = $_POST['PrecioProducto'];
	$vcantProd = $_POST['CantProducto'];
	$vcategoria = $_POST['cate'];
	$descripcion = $_POST['DescProducto'];

	$ruta=$_POST['imagen'];
	//echo $descripcion."<br><img src='$ruta'>";


$insertar = "UPDATE `productos` SET `Nombre_producto` = '$vnomProd', `Codigo` = '$vcodProd', `Precio` = '$vprecProd', `Descripcion` = '$descripcion', `Cantidad` = '$vcantProd', `Catgoria_idCatgoria` = '$vcategoria', `imagen` = '$ruta' WHERE `idProduct` = $id1";
		 
		
 echo $insertar;

		
		

		if(mysqli_query($conexion,$insertar)){
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=buscarproducto.php'>";
			
		}
		else {
			echo " <h2>Fallo </h2> ";
		}

		}

		if (isset($_POST['Cancelar'])) 
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=buscarproducto.php'>";
		}
		

?>
  		     <div class="header_bottom">
			   <div class="slider-text">
			   	



            
                
			   	
			   	
	  	      </div>
	  	      <div class="slider-img">
	  	      	<img src="images/vision.png" alt="" />
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
<!--<script src= "js/jquery-2.1.4.min.js"></script>
	<script src="js/script.js"></script>-->

</html>

