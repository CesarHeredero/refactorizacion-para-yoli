<?php
// Functions to filter user inputs
function filternombre($field){
    // Sanitize user nombre
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user nombre
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
        return $field;
    }else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    }else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nombreErr = $emailErr = $messageErr = "";
$nombre = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user nombre
    if(empty($_POST["nombre"])){
        $nombreErr = 'nombre.';
    }else{
        $nombre = filternombre($_POST["nombre"]);
        if($nombre == FALSE){
            $nombreErr = 'nombre.';
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = 'email.';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'email.';
        }
    }
    
    // Check input errors before sending email
    if(empty($nombreErr) && empty($emailErr)){
        // Recipient email address
		
		// Create email headers
        $headers = 'From: '. $from . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        $headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "De: ". $Name . " <" . $email . ">\r\n"; 
		
        $to = "info@publicidadcines.com";
		$from = "contacto@publicidadcines.com";
		$subject = "ANUNCIARSE EN CINES: BARCELONA, CATALUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BARCELONA, CATALUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: http://publicidadcines.com/formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}
}
?>




