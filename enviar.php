<?php

$destino = "abdallahvk@gmail.com";

	$nombre = $_POST["nombre"];
	
	$correo = $_POST["correo"];

	$mensaje = $_POST["mensaje"];

	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

	mail($destino,"Contacto",$contenido);

	echo "Mensaje enviado correctamente, Gracias.";
?>
