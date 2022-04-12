<?php 
	//INFORMACIÓN BASE DE DATOS
	$host 		 = "localhost";    	// Nombre del servidor
	$basededatos = "prueba_front_end";   // Nombre de la base de datos
	$usuariodb 	 = "root";    		// Nombre del usuariode la base de datos
	$clavedb 	 = "";    			// Clave para acceder a la base de datos.

	//LISTA DE TABLAS
	$categoria = "categoria"; 	   			
	$producto = "producto"; 	   			
	$marca = "marca"; 	   			

	//ERRORES DE PHP
	error_reporting(-1); //1 SI Muestra / -1 NO muestra

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo
	    '<div class="container">
	    <br>
	    <br>
        <center>
	    	<h2><b>ERROR DE CONEXION</b></h2>
	    </center>

	    </div>';
	    exit();
	}

?>
