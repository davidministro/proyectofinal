<?php
//conexion a la base de datos
	


	include "conexion.php";	
	
    $vnomProd = $_POST['NomProducto'];
	$vcodProd	= $_POST['CodProducto'];
	$vprecProd = $_POST['PrecioProducto'];
	$vcantProd = $_POST['CantProducto'];
	$vcategoria = $_POST['cbcate'];
	$descripcion = $_POST['DescProducto'];

	$ruta="images";
	$archivo=$_FILES['imagen']['tmp_name'];
	$nombreArchivo=$_FILES['imagen']['name'];
	move_uploaded_file($archivo, $ruta."/".$nombreArchivo);
	$ruta= $ruta."/".$nombreArchivo;
	//echo $descripcion."<br><img src='$ruta'>";


		$insertar = "INSERT INTO productos (Nombre_producto, Codigo, Precio, Descripcion, Cantidad, Catgoria_idCatgoria,imagen) VALUES ('$vnomProd','$vcodProd','$vprecProd','$descripcion','$vcantProd','$vcategoria','$ruta')";
		
		

		if(mysql_query($insertar)){
			echo "<h2>Dato Guardado </h2>";
			echo "<a href ='imagen.php'>Ver Imagenes</a>";
		}
		else {
			echo " <h2>Fallo en Guardado </h2> ";
		}


?>
