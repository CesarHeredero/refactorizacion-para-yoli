<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Captcha</title>
<meta name="title" content="Registration Form with PHP Captcha Demo"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});


 $('#register').submit(function() {
   
	$.post("submit_demo_captcha.php?"+$("#register").serialize(), { }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           clear_form();
           alert("Formulario enviado con éxito.")
        }else{
           alert("El código de verificación es incorrecto!");
        }
	});
	return false;
    });


     function clear_form()
     {
        $("#username").val('');
		$("#captcha").val('');
     }


});

</script>

</head>
<body>
<div id="bodyfull">
<div id="bodyfull2">
	<div id="center">

		<div class="inner_right_demo"> 
		<form name="register" action="#null" method="post" id="register">
			<div class="form_box">
			  <div>
			    <label>User Name</label>
					<input type="text"  placeholder="Enter Your User Name" id="username" name="username" required="required">
				</div>
			  <div>
			    <label>Captcha</label>
					<input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha" required="required">
                    <?php
session_start();
?>
					<img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  />
					<img src="images/refresh.png" alt="reload" class="refresh" />
				</div>
				
				<div>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit"></div>
				</div>
				
				
					
				
				
			</div>
			</form>
		</div>

</div>	
</div>
</div>
</body>

</html>