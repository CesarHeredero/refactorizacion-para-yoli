<?php

//ENVIA DATOS VIA EMAIL

$to = "info@publicidadcines.com";
$from = "contacto@publicidadcines.com";
$subject = "ANUNCIARSE EN CINES: SAN MARTIN DE VALDEIGLESIAS, MADRID / publicidadcines.com";

$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SAN MARTIN DE VALDEIGLESIAS, MADRID / publicidadcines.com</div>  <br /><hr />';
$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';

$Name = $_POST['nombre'];
$email = $_POST['email'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From:info@publicidadcines.com\r\n"; 

session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])

$success = mail($to, $subject, $message, $headers);
if ($success) {
	header("Location: formulario-enviado.html");	
	
}else{
	die("El codigo no es correcto, vuelva atras.");
}
?>
