
<?php
include "conexion.php";	
 
			
			 $id=$_GET['id'];

					$query = "SELECT * FROM `productos` WHERE `idProduct` = '$id'";

    				$record = mysqli_query($conexion,$query);
    			$dato = mysqli_fetch_array($record)
					  


		
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
							<a >X-Tech</a>
						</li>
						
						<li>
							<a ></a>
							
						</li>
						<li>
							<a ></a>
							
						</li>
						
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>

<br>   <br>
  		       	<form method="post"  enctype="multipart/form-data" class="form-horizontal"> 
			   <div class="form-group">
					<label class="col-lg-2 control-label"><strong>Nombre Del Producto:</strong></label>
			   	    <div class="col-lg-6"> 
			   	    <input class="form-control" type="text" name="NomProducto" id="NomProducto" value="<?php echo $dato['Nombre_producto']; ?>">
		   	      </div>
				</div>

			   	  <div class="form-group">
					<label class="col-lg-2 control-label"for="imagen">Cargar Imagen:</label>
					<div class="col-lg-6"> 
					<input type="file" name="imagen" id="imagen" />
					<p><img src="<?php echo $dato['imagen']; ?>" height="175px"> </p>       
					</div>
                  </div>


                  
	

                                           
                                                   
                 
                   <div class="form-group"><div class="col-lg-6"><center>
                  
                    <button  name="Actualizar" id="Actualizar" type="submit"  class="btn btn-primary">Actualizar </button>
                    <button  name="Cancelar" id="Cancelar" type="submit" class="btn btn-primary">Cancelar      </button></p>
                    </center></div></div>
                  
		   	     </form>
                 
                <div id="mensaje"></div>


                <?php

	
	if (isset($_POST['Actualizar'])) {
	

echo "<h2>Actualizando</h2>";
	
	
    $id;

	$ruta="images";
	$archivo=$_FILES['imagen']['tmp_name'];
	$nombreArchivo=$_FILES['imagen']['name'];
	move_uploaded_file($archivo, $ruta."/".$nombreArchivo);
		$ruta= $ruta."/".$nombreArchivo;
	//echo $descripcion."<br><img src='$ruta'>";


		$insertar=("UPDATE `productos` SET `imagen` = '$ruta' WHERE `idProduct` = $id");
		if(mysqli_query($conexion,$insertar)){
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=modificar.php?CodProducto=$id'>";
		}
		else {
			echo " <h2>Fallo en Guardado </h2> ";
		}


		
		//bloque del boton que elimina un producto
		
}


if (isset($_POST['Cancelar'])) 
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=modificar.php?CodProducto=$id'>";
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