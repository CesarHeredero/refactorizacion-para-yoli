/*verificar captcha start*/
function verificarCaptcha()
{
	var tmptxt = $("#tmptxt").val();
	var acton = $("#acton").val();
	$.ajax({
		type: "POST",
		url: "captcha/verifficaptcha.php",
		data: "tmptxt="+tmptxt+"&action="+acton,
		async:true,
		beforeSend: function(objeto){
			$('#captchaResult').html("Un momento...");
		},
		success: function(datos){
			//alert(datos);
			//$("#result").html("seleccione un mes...");
			if(datos=='OK')
			{
				$('#captchaResult').html("Excelente!... ");	
				$("#action").css("display","block");
				$("#btgest").css("display","none");
				$("#captcha").css("display","none");	
			}
			else
			{
				$('#captchaResult').html("Código incorrecto, intentelo de nuevo!");				
			}
		},
		timeout: 300000
	});
}
/*verificar captcha end*/

/*reload captcha start*/
function reloadCaptcha()
{
	  $(".imgcaptcha").attr("src","captcha/captcha.php?_="+((new Date()).getTime()));


}
/*reload captcha end*/