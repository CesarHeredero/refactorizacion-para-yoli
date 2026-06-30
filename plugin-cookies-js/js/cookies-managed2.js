/*
*Creado por agcarlosandres@gmail.com
* CookiesJS es un plugin para dar manejo al mensaje de cookies, permitiendo al usuario denegar o aceptar las cookies en su navegacion
* Debe configurar las variables iniciales: 
* * urlMsgCookiesJS (url de la pagina donde esta la información del manejo de cookies dentro del sitio, sino tiene uno asigne el valor booleano false)
* * primaryBackgroundCookiesJS (Color de fondo que desea asignar al boton de aceptar cookies)
* * nameSiteCookiesJS (Nombre del sitio web, se mostrará en el mensaje de cookies)
* * dentro de la función declineCookies() deberá activar los diferentes: document.getElementById("googleTag").remove(), incluyendo los ids de los objetos que contienen cookies y que seran removidos si el visitante declina su uso, estos ids deben ser asignados previamente a cada elemento donde se usen las cookies respectivas.
*/

var cookieActiveCookiesJS=false;
var urlMsgCookiesJS="http://publicidadcines.com/politica-uso-cookies.html"; //string or false
var primaryBackgroundCookiesJS="#C9415A"; //#0061aa
var nameSiteCookiesJS="Publicidadcines.com";

(function() {

   getCookieActive();

})();



function getCookieActive(){
	var name = "cookieActiveCookiesJS";

	var nameEQ = name + "=";
	var ca = document.cookie.split(";");

	for (var i = 0; i < ca.length; i++){
	  var c = ca[i];
	  console.log(c);
	  while (c.charAt(0) === " ") c = c.substring(1, c.length);
	  if (c.indexOf(nameEQ) === 0){
	    cookieActiveCookiesJS=true;
	    return c.substring(nameEQ.length, c.length);
	  } 
	}

	if(cookieActiveCookiesJS===false){
		generateMsgCookies();
	}else{
		hiddenMsgCookies();
	}

	return null;

}


function generateMsgCookies(){
	const data = document.createElement("div");
	data.id="msg-cookies-js";
	if(urlMsgCookiesJS===false){
		data.innerHTML = "<span>Este sitio utiliza cookies con el objetivo de permitirnos conocer sevicios y ofertas adaptadas a sus necesidades.</span><div class='btns'><a href='javascript:void(0);' class='btn-accept' id='btn-accept-cookies' onClick='acceptCookies();'>Aceptar</a><a href='javascript:void(0);' class='btn-decline' onClick='declineCookies();'>Rechazar</a></div>";
	}else{
		data.innerHTML = "<span>"+nameSiteCookiesJS+" utiliza cookies con el objetivo de permitirnos conocer sevicios y ofertas adaptadas a sus necesidades. Puede obtener más información sobre el uso de cookies, <a href='"+urlMsgCookiesJS+"'>AQUÍ</a>.</span><div class='btns'><a href='javascript:void(0);' class='btn-accept' id='btn-accept-cookies' onClick='acceptCookies();'>Aceptar</a><a href='javascript:void(0);' class='btn-decline' onClick='declineCookies();'>Rechazar</a></div>";
	}
	
	document.body.appendChild(data);
	var intro = document.getElementById('btn-accept-cookies');
	intro.style.backgroundColor = primaryBackgroundCookiesJS;	
}

function hiddenMsgCookies(){
	document.getElementById("msg-cookies-js").remove();
}


function acceptCookies(){
    var name = "cookieActiveCookiesJS";
    var value = "1";
    var days = "30";
    
    var expires = "";

    if (days) {
      let date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }

    document.cookie = name + "=" + (value || "") + expires + "; path=/";

    cookieActiveCookiesJS=true;	
    hiddenMsgCookies();
}

function declineCookies(){
	if(confirm("Está a punto de desactivar las cookies, podrá seguir navegando, pero si las desactiva algunas funciones quedarán desactivadas y no podremos medir y mejorar su experiencia")){

		//Ids de las cookies a desactivar
		document.getElementById("idChat").remove();
		document.getElementById("idGoogleAnalitics").remove();
		document.getElementById("livezilla_tracking").remove();
		document.getElementById("lz_chat_overlay_main").remove();
		document.getElementById("lz_overlay_chat").remove();

		deleteAllCookies();

		cookieActiveCookiesJS=true;
		getCookieActive();
	}

}

//Delete all cookies

function deleteAllCookies(){
	var cookies = document.cookie.split(";");
	for (var i = 0; i < cookies.length; i++)
	  deleteCookie(cookies[i].split("=")[0],"/");
	  deleteCookie("lz_userid","/livezilla");
	  deleteCookie("lz_last_visit","/livezilla");
	  deleteCookie("lz_visits","/livezilla");
	  window['ga-disable-UA-63460694-2'] = true;
} 

function _deleteCookie(name){
	console.log("deleted:"+name);
	this.setCookie(name,"",-100);
}

function setCookie(name, value, expirydays) {
	var d = new Date();
	d.setTime(d.getTime() + (expirydays*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = name + "=" + value + "; " + expires;
}
function deleteCookie(name,path) {
	document.cookie = name +'=; Path='+path+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	console.log("deleted-two:"+name);
  }