<?php
session_start();
if ($_SESSION['nombre']) {
 	session_destroy();
 	header("location: portada.php");
 } 
 else{

header("location: portada.php");
 }

?>