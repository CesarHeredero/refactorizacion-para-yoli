<?php

//ENVIA DATOS VIA EMAIL

$to = "tabita@santisoasesores.com";
$from = "contacto@viajesacolombia.es";
$subject = "Codigo Captcha";

$message = '<div style="color:#009966; font-weight:bold;">Codigo Captcha</div>  <br /><hr />';
$message .= 'Codigo Captcha: ' . utf8_decode ($_POST['captcha']).'<br />';

$Name = $_POST['nombre'];
$email = $_POST['email'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "De: ". $Name . " <" . $email . ">\r\n"; 

$success = mail($to, $subject, $message, $headers);

if ($success) {
	header("Location: ../formulario-enviado.html");
	
}else{
	echo "Ha ocurrido un error.";
}
?>
