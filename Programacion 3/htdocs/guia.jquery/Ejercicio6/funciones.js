function verificarNombre()
{
    var pagina = "comprobarDisponibilidad.php";
    //var nombre = document.getElementById("txtNombre").value;
	//var datoString = "txtNombre="+nombre;

    $.ajax({
        type: 'POST',//GET o POST. GET DEFAULT.
        url: pagina,//PAGINA DESTINO DE LA PETICION
        dataType: "text",//INDICA EL TIPO QUE SE ESPERA RECIBIR DESDE EL SERVIDOR (XML, HTML, TEXT, JSON, SCRIPT)
        data: $("#form").serialize(),//DATO A SER ENVIADO AL SERVIDOR. TIPO: OBJETO, STRING, ARRAY.
        async: true,//ESTABLECE EL MODO DE PETICION. DEFECTO ASINCRONICO.
		/*statusCode: {//CODIGO NUMERICO DE RESPUESTA HTTP
						200: function(){
							alert("200 - Encontrado!!!");
						},
						404: function(){
							alert("404 - No encontrado!!!");
						}
					}*/
    })
	.done(function (data) {//RECUPERO LA RESPUESTA DEL SERVIDOR EN 'RESULTADO', DE ACUERDO AL DATATYPE.
		alert(data);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });
}
