var band= new XMLHttpRequest();
function EnviarAJAXget() {

    band.open("GET","destino.php?valor="+document.getElementById("txtValor").value,true);
    band.send();

    band.onreadystatechange=function(){
        if(band.readyState==4 && band.status==200)
        console.log(band.responseText);
    }
    
}

/*function EnviarAJAXpost() {

    band.open("POST","destino.php",true);
    band.setRequestHeader("application\ x-www-form-urlencoded");
    band.send("valor="+document.getElementById("txtValor"));

    band.onreadystatechange=function(){
        if(band.readyState==4 && band.status==200)
        console.log(band.responseText);
    }
    
}*/


function Calcular()
{
    var valor;
    var n1=parseInt(document.getElementById("txtValor1").value);
    var n2=parseInt(document.getElementById("txtValor2").value);
    var op=document.getElementById("cboOperador").value;

    band.open("GET","destino.php?valor1="+n1+"&valor3="+op+"&valor2="+n2,true);

    band.send();

    band.onreadystatechange=function(){
        if(band.readyState==4 && band.status==200)
        alert(band.responseText);
    }


}


function Calcularjq() {
    var pagina = "destino.php";

	
    $.ajax({
        type: 'GET',//GET o POST. GET DEFAULT.
        url: pagina,//PAGINA DESTINO DE LA PETICION
        dataType: "text",//INDICA EL TIPO QUE SE ESPERA RECIBIR DESDE EL SERVIDOR (XML, HTML, TEXT, JSON, SCRIPT) 
        data: "valor1="+$("#txtValor1").val()+"&valor2="+$("#txtValor2").val()+"&valor3="+$("#cboOperador").val(),//DATO A SER ENVIADO AL SERVIDOR. TIPO: OBJETO, STRING, ARRAY.
        async: true,//ESTABLECE EL MODO DE PETICION. DEFECTO ASINCRONICO.
		statusCode: {//CODIGO NUMERICO DE RESPUESTA HTTP
						200: function(){
							alert("200 - Encontrado!!!");
						},
						404: function(){
							alert("404 - No encontrado!!!");
						}
					}
    })
	.done(function (resultado) {//RECUPERO LA RESPUESTA DEL SERVIDOR EN 'RESULTADO', DE ACUERDO AL DATATYPE.
		alert(resultado);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
}