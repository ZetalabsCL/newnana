<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$rut = $_POST['rut'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", su rut o pasaporte es " . $rut . " y su Telefono es " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Enviado el " . date("d/m/y \a \l\a\s H:i:s ");

$para = 'jreyes@nanasos.cl';
$asunto = 'Contacto desde NANASOS NECESITO TRABAJO URGENTE';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($para, $asunto, $mensaje, $header); //This method sends the mail.
echo '<div style="color:green;">Tu mensaje fue enviado correctamente. Pronto nos contactaremos contigo!!</div>'	; // success message
}else{
echo "Los datos del formulario estan incorrectos, revisalos y vuelve a intentarlo";
}

?>