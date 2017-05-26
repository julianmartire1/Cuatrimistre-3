function mostrarColeccionJson()
{
    var pagina = "mostrarColeccionJson.php";
    var productos = [{ "codigoBarra": 123, "nombre": "Fideos", "precio": "$12" },
                     { "codigoBarra": 124, "nombre": "Tomate", "precio": "$7"},
                     { "codigoBarra": 125, "nombre": "Carne", "precio": "$40"}
                    ]
    
    $.ajax({
            type: 'POST',
            url: pagina,
            dataType: "text",
            data: {objJson : productos},
            async: true
            })
            .done(function (objJson) {
                alert(objJson);
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
            });   
}

function leerAutos()
{
    var pagina = "traerAuto.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        async: true
    })
	.done(function (resultado) {//RECUPERO LA RESPUESTA DEL SERVIDOR EN 'RESULTADO', DE ACUERDO AL DATATYPE.
		alert(resultado);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    }); 	
}