<?php 
require("conexion.php");

$username = $_POST['txtNombre'];
$pass = $_POST['txtPassword'];


					include "conexion.php";									

session_start();					
                    $query = "SELECT *FROM usuario WHERE Usuario = '$username' and Password = '$pass' ";
    				$record = mysqli_query($conexion,$query);
				    if($dato = mysqli_fetch_array($record))
//				    $_SESSION['idTipo'] = 0; 
					  		{
			        		  		 $idTipo = $dato['TipoUsuario_idTipoUsuario'];
		     					 	 if ($idTipo == 1 ) {

		       			 	 		   	echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
		       			 	 		            	$_SESSION['idTipo'] = $dato['TipoUsuario_idTipoUsuario'];
		       			 	 		   	            $_SESSION['nombre'] = $dato['Nombres'];

		    					    	 echo "<script> location.href = 'index.php' </script> ";
		     					 	 } 
				     					 	 else{

							                        echo '<script>alert("BIENVENIDO USUARIOS")</script>';
							                        $_SESSION['idTipo'] = $dato['TipoUsuario_idTipoUsuario'];
							                        $_SESSION['idUsu']= $dato['idUsuario'];
							                        $_SESSION['nombre']= $dato['Nombres'];
												 	echo " <script> location.href = 'index.php' </script> ";

												 }


    						}//fin del if mysql array
							 else{

		                		echo '<script>alert("DATOS INCORRECTOS")</script>';
		 
							 	echo " <script> location.href = 'loginmejorado.php' </script> ";

							 }

					 ?>






