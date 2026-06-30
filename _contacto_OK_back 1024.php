<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

require_once("vendors/PHPMailer/src/PHPMailer.php");

$mail= new PHPMailer();

session_start();
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
		
	if ($_POST['verificacion'] != ""){
    // Es un SPAMbot
    exit();
	}else{
		// Es un usuario real, proceder a enviar el formulario.
	}		

$to = "info@publicidadcines.com";
//$to = "agcarlosandres@gmail.com";
//$from = "contacto@publicidadcines.com";
$from = "info@publicidadcines.com";
$subject = "Formulario de CONTACTO de publicidadcines.com";  
		
// Create email headers
/*
$headers = 'From: '. $from . "\r\n" .
'Reply-To: '. $email . "\r\n" .
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "De: ". utf8_decode ($_POST['nombre']) . " <" . $email . ">\r\n"; 
*/

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From:iinfo@publicidadcines.com\r\n";

$message = '<body style="padding-bottom: 0px; padding-top: 0px; padding-left: 0px; margin: 0px; padding-right: 0px;" sarbacane="fix"> 
<table style="width: 100%" cellspacing="0" cellpadding="0" border="0"> 
   <tbody> 
    <tr> 
     <td style="padding-bottom: 10px; padding-top: 10px; padding-left: 10px; padding-right: 10px; background-color: #FFF" align="center" custombackgroundcolor="true"><table width="800" border="0" cellpadding="0" cellspacing="0">
       <tbody>
         <tr>
           <td class="full" valign="top"><table cellspacing="0" cellpadding="0" width="800" align="left" border="0">
             <tbody>
               <tr>
                 <td style="padding-bottom: 10px; padding-top: 10px; padding-left: 10px; padding-right: 10px; mso-table-lspace: 0; mso-table-rspace: 0" valign="top"><div style="font-family: Arial, Helvetica, sans-serif"> 
                   <font color="#383838" style="font-size:14px">
                   <p><span style="color:#555; font-weight:bold; font-size:16px;">FORMULARIO DE CONTACTO DE </span> <a style="color:#c9415a; font-weight:bold; font-size:16px;" href="http://publicidadcines.com/" target="_blank">PUBLICIDADCINES.COM</a></p>
                   
                   <p style="border-bottom:1px solid #c9415a;"></p>
                   <p>Nombre: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['nombre']).'</span></p>
                   <p>Email: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['email']).'</span></p>
                   <p>Tel&eacute;fono: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['telefono']).'</span></p>
				   <p>Empresa: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['empresa']).'</span></p>
				   <p>Ciudad/Poblacion: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['ciudad']).'</span></p>
                   <p style="border-bottom:1px solid #c9415a;"></p>

                   <div style="width:500px; max-width:700px;"><p>Consulta: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['mensaje']).'</span></p></div>
				   
				   <p style="border-bottom:1px solid #c9415a;"></p>
				   
				   <p>Contactar por: <span style="color:#555; font-weight:bold;">'. utf8_decode ($_POST['info']).'</span></p>
                   </font> 
                 
                 </div></td>
               </tr>
             </tbody>
           </table></td>
         </tr>
       </tbody>
     </table></td>
    </tr>
   </tbody>
 </table>
 </body>
';  
 
	}


if($_SESSION['tmptxt']==$_POST["tmptxt"]);


  try {

      //Recipients
      //$mail->setFrom('info@publicidadcines.com', "publicidadcines.com");
      $mail->setFrom('mgs@crucemar.com', "publicidadcines.com");
      $mail->addAddress('info@publicidadcines.com');     //Add a recipient
      //$mail->addAddress('agcarlosandres@gmail.com');     //Add a recipient
    
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = $message;
      $mail->CharSet = 'UTF-8';
    
      $mail->send();
      header("Location: formulario-enviado.html");
    } catch (Exception $e) {
      print "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
?>
