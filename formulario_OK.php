<?php 
if ($_POST['formulario-envio']==1)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ADEJE, SANTA CRUZ DE TENERIFE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ADEJE, SANTA CRUZ DE TENERIFE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==2)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ALBACETE, CASTILLA-LA MANCHA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ALBACETE, CASTILLA-LA MANCHA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==3)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ALFAFAR, VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ALFAFAR, VALENCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n";  
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==4)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ALICANTE, VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ALICANTE, VALENCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==5)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ALMERIA, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ALMERIA, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==6)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ALZIRA, VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ALZIRA, VALENCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==7)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ARANDA DE DUERO, BURGOS / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ARANDA DE DUERO, BURGOS / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==8)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ARENAS DE SAN PEDRO, AVILA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ARENAS DE SAN PEDRO, AVILA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==9)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ARENYS DEL MAR, BARCELONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ARENYS DEL MAR, BARCELONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==10)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ARONA, SANTA CRUZ DE TENERIFE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ARONA, SANTA CRUZ DE TENERIFE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==11)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: AVILA, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: AVILA, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==12)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BADAJOZ, EXTREMADURA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BADAJOZ, EXTREMADURA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==13)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BARCELONA, CATALUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BARCELONA, CATALUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==14)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BEJAR, SALAMANCA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BEJAR, SALAMANCA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==15)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BENAVENTE, ZAMORA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BENAVENTE, ZAMORA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==16)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BORMUJOS, SEVILLA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BORMUJOS, SEVILLA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==17)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: BURGOS, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: BURGOS, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==18)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CACERES, EXTREMADURA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CACERES, EXTREMADURA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==19)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CADIZ, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CADIZ, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==20)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CAMPODRONI, GERONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CAMPODRONI, GERONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==21)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CANDELARIA, SANTA CRUZ DE TENERIFE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CANDELARIA, SANTA CRUZ DE TENERIFE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==22)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CEE, LA CORUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CEE, LA CORUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==23)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CERDANYOLA, BARCELONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CERDANYOLA, BARCELONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==24)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CISTIERNA, LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CISTIERNA, LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==25)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CIUDAD REAL, CASTILLA-LA MANCHA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CIUDAD REAL, CASTILLA-LA MANCHA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==26)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: COIN, MALAGA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: COIN, MALAGA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==27)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: CORDOBA, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: CORDOBA, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==28)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: COSLADA, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: COSLADA, MADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==29)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: DOS HERMANAS, SEVILLA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: DOS HERMANAS, SEVILLA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==30)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ECIJA, SEVILLA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ECIJA, SEVILLA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==31)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: EL EJIDO, ALMERIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: EL EJIDO, ALMERIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==32)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: EL ENTREGO, GIJON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: EL ENTREGO, GIJON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==33)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: EZCARAY, LOGROÑO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: EZCARAY, LOGROÑO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==34)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: FERROL, LA CORUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: FERROL, LA CORUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==35)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: FIGUERES, GERONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: FIGUERES, GERONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==36)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: FINESTRAT, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: FINESTRAT, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==37)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: FUENGIROLA, MALAGA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: FUENGIROLA, MALAGA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==38)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: GERONA, CATALUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: GERONA, CATALUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==39)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: GIJON, ASTURIAS / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: GIJON, ASTURIAS / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==40)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: GRANADA, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: GRANADA, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==41)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: HOSPITALET, BARCELONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: HOSPITALET, BARCELONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==42)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: HUELVA, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: HUELVA, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==43)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: IBIZA, ISLAS BALEARES / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: IBIZA, ISLAS BALEARES / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==44)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: JAEN, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: JAEN, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==45)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LA CORUÑA, GALICIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LA CORUÑA, GALICIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==46)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LA LAGUNA, SANTA CRUZ DE TENERIFE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LA LAGUNA, SANTA CRUZ DE TENERIFE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==47)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LAS PALMAS, ISLAS CANARIAS / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LAS PALMAS, ISLAS CANARIAS / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==48)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LA ZUBIA, GRANADA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LA ZUBIA, GRANADA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==49)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LEIRO, OURENSE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LEIRO, OURENSE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>



<?php
if ($_POST['formulario-envio']==50)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LEON, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LEON, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==51)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LEPE, HUELVA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LEPE, HUELVA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==52)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LERIDA, CATALUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LERIDA, CATALUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==53)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LLANOS DE ARRIDANE, SANTA CRUZ DE TENERIFE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LLANOS DE ARRIDANE, SANTA CRUZ DE TENERIFE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==54)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LOGROÑO, LA RIOJA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LOGROÑO, LA RIOJA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==55)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LORCA, MURCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LORCA, MURCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==56)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LUCENA, CORDOBA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LUCENA, CORDOBA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==57)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: LUGO, GALICIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: LUGO, GALICIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==58)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==59)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MAHON, IBIZA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MAHON, IBIZA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==60)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MALAGA, ANDAUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MALAGA, ANDAUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==61)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MANACOR, PALMA DE MALLORCA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MANACOR, PALMA DE MALLORCA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==62)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MANRESA, BARCELONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MANRESA, BARCELONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==63)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MARCHENA, SEVILLA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MARCHENA, SEVILLA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==64)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MEDINA DEL CAMPO, VALLADOLID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MEDINA DEL CAMPO, VALLADOLID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==65)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MELILLA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MELILLA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==66)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MIERES, GIJON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MIERES, GIJON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==67)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: MURCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: MURCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==68)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ONDARA, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ONDARA, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==69)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ONTANIENTE, VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ONTANIENTE, VALENCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==70)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: OURENSE, GALICIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: OURENSE, GALICIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==71)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ORIHUELA, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ORIHUELA, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==72)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PALMA DE MALLORCA, ISLAS BALEARES / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PALMA DE MALLORCA, ISLAS BALEARES / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==73)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PAMPLONA, NAVARRA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PAMPLONA, NAVARRA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==74)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PEDRAJAS DE SAN ESTEBAN, VALLADOLID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PEDRAJAS DE SAN ESTEBAN, VALLADOLID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==75)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PELAYOS DE LA PRESA, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PEDRAJAS DE SAN ESTEBAN, VALLADOLID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==76)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PINEDO, VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PINEDO, VALENCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==77)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PINTO, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PINTO, MADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==78)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PLAYA DE SAN JUAN, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PLAYA DE SAN JUAN, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==79)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PONTEVEDRA, GALICIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PONTEVEDRA, GALICIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==80)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PUERTOLLANO, CIUDAD REAL / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PUERTOLLANO, CIUDAD REAL / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==81)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: PUNTA UMBRIA, HUELVA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: PUNTA UMBRIA, HUELVA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==82)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: REUS, TARRAGONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: REUS, TARRAGONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==83)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: RONDA, MALAGA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: RONDA, MALAGA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==84)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SALAMANCA, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SALAMANCA, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==85)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SANLUCAR DE BARRAMEDA, CADIZ / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SANLUCAR DE BARRAMEDA, CADIZ / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==86)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SAN MARTIN DE VALDEIGLESIAS, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SAN MARTIN DE VALDEIGLESIAS, MADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==87)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SANTA CRUZ DE TENERIFE, ISLAS CANARIAS / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SANTA CRUZ DE TENERIFE, ISLAS CANARIAS / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==88)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SANTA MARIA DEL PARAMO, LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SANTA MARIA DEL PARAMO, LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==89)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SANTA POLA, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SANTA POLA, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==90)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SEGOVIA, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SEGOVIA, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==91)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SEO DE URGEL, LERIDA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SEO DE URGEL, LERIDA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==92)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: SEVILLA, ANDALUCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: SEVILLA, ANDALUCIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==93)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TALAVERA DE LA REINA, TOLEDO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TALAVERA DE LA REINA, TOLEDO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==94)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TARRAGONA, CATALUÑA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TARRAGONA, CATALUÑA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==95)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TELDE, LAS PALMAS / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TELDE, LAS PALMAS / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==96)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TERASSA, BARCELONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TERASSA, BARCELONA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==97)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TERUEL, ARAGON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TERUEL, ARAGON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==98)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TOLEDO, CASTILLA-LA MCANCHA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TOLEDO, CASTILLA-LA MCANCHA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==99)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TORRELAVEGA, CANTABRIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TORRELAVEGA, CANTABRIA / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==100)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: TORREVIEJA, ALICANTE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: TORREVIEJA, ALICANTE / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==101)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: UBEDA, JAEN / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: UBEDA, JAEN / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==102)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VALDEMORO, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VALDEMORO, MADRID / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==103)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VALENCIA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VALENCIA / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==104)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VALENCIA DE DON JUAN, LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VALENCIA DE DON JUAN, LEON / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==105)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VALLADOLID, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VALLADOLID, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==106)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VIANA, PAMPLONA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VIANA, PAMPLONA / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==107)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VIGO, PONTEVEDRA / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VIGO, PONTEVEDRA / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==108)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VILLABLINO, LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VILLABLINO, LEON / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==109)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VILLACAÑAS, TOLEDO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VILLACAÑAS, TOLEDO / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==110)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VILLAROBLEDO, ALBACETE / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VILLAROBLEDO, ALBACETE / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==111)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: VILLAVICIOSA DE ODON, MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: VILLAVICIOSA DE ODON, MADRID / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==112)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ZAFRA, BADAJOZ / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ZAFRA, BADAJOZ / publicidadcines.com</div>  <br /><hr />';
		
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==113)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "ANUNCIARSE EN CINES: ZAMORA, CASTILLA Y LEON / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">ANUNCIARSE EN CINES: ZAMORA, CASTILLA Y LEON / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>










<?php
if ($_POST['formulario-envio']==114)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==115)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==116)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==117)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==118)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO ONDA MADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO ONDA MADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>


<?php
if ($_POST['formulario-envio']==119)
{
	if($_POST['nombre']!='' or $_POST['email']!='' or $_POST['empresa']!='' or $_POST['ciudad']!='' or $_POST['mensaje']!='')
	{
		$to = "info@plato16.es, info@plato16.es";
		$from = "info@plato16.es";
		$subject = "FORMULARIO DE CONTACTO TELEMADRID / publicidadcines.com";
		
		$message = '<div style="color:#C9415A; font-weight:bold;">FORMULARIO DE CONTACTO TELEMADRID / publicidadcines.com</div>  <br /><hr />';
		$message .= 'Nombre: ' . utf8_decode ($_POST['nombre']).'<br />';
		$message .= 'E-mail: ' . utf8_decode ($_POST['email']).'<br />';
		$message .= 'Telefono: ' . utf8_decode ($_POST['telefono']).'<br />';
		$message .= 'Empresa: ' . utf8_decode ($_POST['empresa']).'<br />';
		$message .= 'Ciudad/Poblacion: ' . utf8_decode ($_POST['ciudad']).'<br />';
		$message .= 'Mensaje: ' . utf8_decode ($_POST['mensaje']).'<br /><hr />';
		$message .= 'Envio: ' . utf8_decode ($_POST['formulario-envio']).'<br /><hr />';

		$Name = $_POST['nombre'];
		$email = $_POST['mail'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:info@plato16.es\r\n"; 
		
		session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		
		$success = mail($to, $subject, $message, $headers);
		if ($success) {
			header("Location: formulario-enviado.html");	
			
		}else{
			die("El codigo no es correcto, vuelva atras.");
		}
	}else{
		header("Location: index.html");
	}
}
?>






