<?php
session_start();
if ($_POST['action'] == "checkdata") {
	if(isset($_SESSION['tmptxt'])){  // Comprobamos que este la session tmptxt
		if ($_SESSION['tmptxt'] == $_POST['tmptxt']) { // Si la cadena de texto introducida es igual a la imagen
			print "OK";
		} else {
			print "Intentalo nuevamente";
		}
	} else { 
		print "Error"; 
	}
}
?>