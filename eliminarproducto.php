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
	


				<form method="post"  action="eliminar.php" enctype="multipart/form-data" class="form-horizontal">
			   	  	 <h1><center>Ingrese Codigo de Producto a Eliminar</center></h1>
			   	  	 <div class="form-group">
			   		  <br><br><br>

				   	    <label class="col-lg-2 control-label" ><strong>Codigo:</strong></label>
	                    <div class="col-lg-6">  <input class="form-control" type="text" name="CodProducto"id="CodProducto" ></div>
        	            <button  name="Buscar" id ="Buscar" type="submit" class="btn btn-primary">Buscar </button>
            	        <label ><strong><br>
                    
                </form>

  		     <div class="header_bottom">
			   <div class="slider-text">


			   
                 
              
         
                
			   	
			   	
	  	      
	  	      
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

