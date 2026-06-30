<?php
$mail1='info@crucerosfluviales.es';
$mail2='mgs@santisoasesores.com';
$mail3='tabita@santisoasesores.com';
$mail4='mgs@crucemar.com';
$mail5='oscar@crucemar.com';
$mail6='info@santisoasesores.com';
$mail7='esther@crucemar.com';
extract($_REQUEST);

if($envio==1)
{
	$asunto1 = 'Presupuesto Personalizado desde Cruceros Fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de presupuesto personalizado</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Estoy interesado en un crucero por:</a> '.$ruta.'<br />
<a href="#">Compañia de interes:</a> '.$naviera.'<br />
<a href="#">Fecha de salida:</a> '.$fecha.'<br />
<a href="#">Viajeros adultos(18 +):</a> '.$adultos.'<br />
<a href="#">Viajeros menores (0 - 17):</a> '.$menores.'<br />
<a href="#">Edades de los menores:</a> '.$edades.'<br />
<a href="#">Solicito presupuesto para:</a> '.$objetivoPto.'<br />
<a href="#">Deseo recibir la respuesta por:</a> '.$objetivoRespuesta.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);
	if($ruta=='BRASIL Amazonas' or $naviera=='SCENIC CRUISES')
	{
		mail($mail5,$asunto1,$codigohtml1,$cabeceras);
	}
	print 'OK';
}
###
if($envio==2)
{
	$asunto1 = 'Solicitud de Reserva desde Cruceros Fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de reserva</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Crucero de Interés:</a> '.$crucero.'<br />
<a href="#">Itinerario:</a> '.$itinerario.'<br />
<a href="#">Fecha de salida:</a> '.$fecha.'<br />
<a href="#">Viajeros adultos(18 +):</a> '.$adultos.'<br />
<a href="#">Viajeros menores (0 - 17):</a> '.$menores.'<br />
<a href="#">Edades de los menores:</a> '.$edades.'<br />
<a href="#">Solicito presupuesto para:</a> '.$objetivoPto.'<br />
<a href="#">Deseo recibir la respuesta por:</a> '.$objetivoRespuesta.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	if($rioId=='21' or $rioId=='17')
	{
		mail($mail5,$asunto1,$codigohtml1,$cabeceras);
		mail($mail4,$asunto1,$codigohtml1,$cabeceras);	
		mail($mail6,$asunto1,$codigohtml1,$cabeceras);				
	}else{
		if($navieraId=='10' or $navieraId=='11' or $navieraId=='3' or $navieraId=='8' or $navieraId=='5' or $cruceroId=='527' or $cruceroId=='526' or $cruceroId=='614' or $cruceroId=='615' or $cruceroId=='528')
		{
			mail($mail5,$asunto1,$codigohtml1,$cabeceras);
			mail($mail4,$asunto1,$codigohtml1,$cabeceras);	
			mail($mail6,$asunto1,$codigohtml1,$cabeceras);				
		}else{
			mail($mail1,$asunto1,$codigohtml1,$cabeceras);
			mail($mail2,$asunto1,$codigohtml1,$cabeceras);
			
		}
	}
	
	print 'OK';
}
###

if($envio==3)
{
	$asunto1 = 'Contacto desde cruceros fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Contácto</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Telefono movil:</a> '.$telefonoMovil.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Localidad:</a> '.$localidad.'<br />
<a href="#">Provincia:</a> '.$provincia.'<br />
<a href="#">País:</a> '.$pais.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);
	print 'OK';
}
###
if($envio==4)
{
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Tratamiento:</a> '.$tratamiento.'<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td><br />
<a href="#">Código postal:</a> '.$codigoPostal.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	print 'OK';
}

###
if($envio==5)
{
	$asunto1 = 'Solicitud de más información -OFERTAS- desde Cruceros Fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de más información por ofertas</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Oferta de Interés:</a> '.$crucero.'<br />
<a href="#">Viajeros adultos(18 +):</a> '.$adultos.'<br />
<a href="#">Viajeros menores (0 - 17):</a> '.$menores.'<br />
<a href="#">Edades de los menores:</a> '.$edades.'<br />
<a href="#">Solicito presupuesto para:</a> '.$objetivoPto.'<br />
<a href="#">Deseo recibir la respuesta por:</a> '.$objetivoRespuesta.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);
	print 'OK';
}
###
if($envio==6)
{
	$asunto1 = 'Presupuesto Personalizado desde Países - Cruceros Fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de presupuesto personalizado</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">País:</a> '.$pais.'<br />
<a href="#">Estoy interesado en un crucero por:</a> '.$ruta.'<br />
<a href="#">Compañia de interes:</a> '.$naviera.'<br />
<a href="#">Fecha de salida:</a> '.$fecha.'<br />
<a href="#">Viajeros adultos(18 +):</a> '.$adultos.'<br />
<a href="#">Viajeros menores (0 - 17):</a> '.$menores.'<br />
<a href="#">Edades de los menores:</a> '.$edades.'<br />
<a href="#">Solicito presupuesto para:</a> '.$objetivoPto.'<br />
<a href="#">Deseo recibir la respuesta por:</a> '.$objetivoRespuesta.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);
	if($ruta=='BRASIL Amazonas' or $naviera=='SCENIC CRUISES')
	{
		mail($mail5,$asunto1,$codigohtml1,$cabeceras);
	}
	print 'OK';
}
###
if($envio==7)
{
	$asunto1 = 'Contacto Prensa y medios de comunicación (España y América Latina)';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Contácto</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Telefono movil:</a> '.$telefonoMovil.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Localidad:</a> '.$localidad.'<br />
<a href="#">Provincia:</a> '.$provincia.'<br />
<a href="#">País:</a> '.$pais.'<br />
<a href="#">Medio al que representa:</a> '.$tipoMedio.'<br />
<a href="#">Otro tipo de medio:</a> '.$otroMedio.'<br />
<a href="#">Nombre el medio al que representa:</a> '.$nombreMedio.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);
	print 'OK';
}
###
if($envio==8)
{
	$asunto1 = 'Pago online desde cruceros fluviales nro. '.$orden;	
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Se ha generado la orden de pago con la integración del Banco Sabadell número. '.$orden.' </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Pago Nro.:</a> '.$orden.'<br />
<a href="#">Valor:</a> '.$precio.'<br />
<a href="#">Producto:</a> '.$producto.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	mail($mail4,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);	
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);	
	mail($mail7,$asunto1,$codigohtml1,$cabeceras);		
	print 'OK';
}

###superofertas
if($envio==9)
{
	$asunto1 = 'Solicitud de Reserva Superoferta desde Cruceros Fluviales';	
	$comentarios=str_replace("CHUCAMA12358456465","&", $comentarios);
	$codigohtml1 = '
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de reserva</span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMACION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Telefono:</a> '.$telefono.'<br />
<a href="#">Correo electrónico:</a> '.$email.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Crucero de Interés:</a> '.$crucero.'<br />
<a href="#">Itinerario:</a> '.$itinerario.'<br />
<a href="#">Fecha de salida:</a> '.$fecha.'<br />
<a href="#">Viajeros adultos(18 +):</a> '.$adultos.'<br />
<a href="#">Viajeros menores (0 - 17):</a> '.$menores.'<br />
<a href="#">Edades de los menores:</a> '.$edades.'<br />
<a href="#">Solicito presupuesto para:</a> '.$objetivoPto.'<br />
<a href="#">Deseo recibir la respuesta por:</a> '.$objetivoRespuesta.'<br />
<a href="#">Preguntas o comentarios:</a><br /> '.$comentarios.'<br />
</span>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
			';
$codigohtml2='
<html>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="silver" >
<STYLE>
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; font-family:arial; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic; font-family:arial; }
 .defaultText { font-size:12px; color:#000000; line-height:150%; font-family:trebuchet ms; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
<table width="100%" cellpadding="10" cellspacing="0" class="backgroundTable" bgcolor="#cfcfcf" >
<tr>
<td valign="top" align="center"><table width="550" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
<td height="114" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;">

<p>
<span style="font-size:20px;font-weight:bold;color:#00000;font-family:arial;line-height:110%;">Solicitud de suscripción a Newsletter </span><br>
<span style="font-size:11px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;">www.crucerosfluviales.es</span>
</p></td>
</tr>

<tr>
<td style="background-color:#EBEBEB;border-top:10px solid #FFFFFF;" valign="top">
<span style="font-size:10px;color:#996600;line-height:100%;font-family:verdana;"> <strong>INFORMA<strong>N</strong>CION RECIBIDA:</strong><br />
<br />
<a href="#">Nombre y Apellido:</a> '.$nombre.', '.$apellido.'<br />
<a href="#">Codigo postal:</a> '.$codigoPostal.'<br />
<a href="#">Correo electrónico:</a> '.$email.'</span></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';

	$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
	$cabeceras .= "info@crucerosfluviales.es\r\n";
	if($suscripcion=='Si')
	{
		$asunto2='Suscripción a Newsletter de crucerosfluviales.es';
		mail($mail3,$asunto2,$codigohtml2,$cabeceras);
		mail($mail4,$asunto2,$codigohtml2,$cabeceras);
	}
	mail($mail1,$asunto1,$codigohtml1,$cabeceras);
	mail($mail2,$asunto1,$codigohtml1,$cabeceras);	
	print 'OK';
}
?>
