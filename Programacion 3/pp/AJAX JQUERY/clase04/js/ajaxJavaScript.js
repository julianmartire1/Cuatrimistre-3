//CREO UNA INSTANCIA DE XMLHTTPREQUEST
var xhttp = new XMLHttpRequest();

function TestAjax(){

	//METODO; URL; ASINCRONICO?
	xhttp.open("GET", "AJAX/ajax_test.php", true);

	//ENVIO DE LA PETICION
	xhttp.send();

	//FUNCION CALLBACK
	xhttp.onreadystatechange = function() {
		
		console.log(xhttp.readyState);
		
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}
}
//ENVIO PETICION CON PARAMETROS POR METODO GET
function TestAjaxGET(){

	//METODO; URL + PARAMETROS; ASINCRONICO?
	xhttp.open("GET", "AJAX/ajax_test.php?valor="+Math.random()*100, true);

	//ENVIO DE LA PETICION
	xhttp.send();

	//FUNCION CALLBACK
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}	
}
//ENVIO PETICION CON PARAMETROS POR METODO POST
function TestAjaxPOST(){
	
	//METODO; URL; ASINCRONICO?
	xhttp.open("POST", "AJAX/ajax_test.php", true);

	//SETEO EL ENCABEZADO DE LA PETICION	
	xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
	
	//ENVIO DE LA PETICION CON LOS PARAMETROS
	xhttp.send("valor="+Math.random()*100);

	//FUNCION CALLBACK
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			alert(xhttp.responseText);
		}
	}
}

function ActualizarGET(){
	
	//METODO; URL + PARAMETROS; ASINCRONICO?
	xhttp.open("GET", "AJAX/ajax_test.php?valor="+Math.random()*100, true);

	//ENVIO DE LA PETICION
	xhttp.send();

	//FUNCION CALLBACK
	xhttp.onreadystatechange = function() {
		AdministrarRespuesta();
	}
}
function ActualizarPOST(){

	//METODO; URL; ASINCRONICO?
	xhttp.open("POST", "AJAX/ajax_test.php", true);
	
	//SETEO EL ENCABEZADO DE LA PETICION	
	xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
	
	//ENVIO DE LA PETICION CON LOS PARAMETROS
	xhttp.send("valor="+Math.random()*100);

	//FUNCION CALLBACK
	xhttp.onreadystatechange = function() {
		AdministrarRespuesta();
	}
}

function AdministrarRespuesta(){

	if (xhttp.readyState == 4 && xhttp.status == 200) {
		//LA RESPUESTA SE GUARDA EN UN ELEMENTO HTML
		document.getElementById("divResultado").innerHTML = xhttp.responseText;
	}

}