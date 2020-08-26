<?php
			$destino = "japerezg.ak103@gmail.com";
			$nombre = $_POST['name']; 
			$correo = $_POST['email']; 
			$asunto = $_POST['subject']; 
			$mensaje = $_POST['message'];

			$header= "enviado desde la pagina de PROCAVIP C.A.";

			$contenido =  "Nombre y Apellido: " . $nombre . "\n Correo: " . $correo . "\nMensaje: " . $mensaje;

			
			mail ($destino,$asunto, $contenido, $header);
			echo "<script>alert('Mensaje Enviado Exitosamente')</script>";
			echo "<script>setTimeout(\"location.href= 'index.html'\")";
?>

