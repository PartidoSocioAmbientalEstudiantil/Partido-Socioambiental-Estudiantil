<?php 


if (isset($_POST['enviar'])) {
	if (!empty($_POST['_replyto']) && !empty($_POST['name'])) {
		$respuesta = $_POST['_replyto'];
		$name = $_POST['name'];

		$header = "From: PSE" . "\r\n\r";
		$header.= "reply-to: PSE" . "\r\n\r";
		$header.="X-Mailer: PHP/". phpversion();
		$mail = mail($name,$respuesta,$header);
		if (@mail) {
			echo "<h4> ¡Mensaje enviado con Éxito!</h4>";
		}
	}
}





?>