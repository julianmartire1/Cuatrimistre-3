function EnviarAJAX()
{
    var valor = document.getElementById("txtValor").value;
    var xhttp = new XMLHttpRequest();

    xhttp.open("POST","destino.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("txtValor="+valor);

    xhttp.onreadystatechange = function(){
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            console.log(xhttp.responseText);
        }
    }
}

function ResultadoAJAX()
{
    var xhttp = new XMLHttpRequest();
    var v1 = parseInt(document.getElementById("valorUno").value);
    var v2 = parseInt(document.getElementById("valorDos").value);
    var operador = document.getElementById("cboOperacion").value;

    switch (operador) {
        case "+":
            operador = "sumar";
            break;
        case "-":
            operador = "restar";
            break;
        case "*":
            operador = "multiplicar";
            break;
        case "/":
            operador = "division";
            break;
        default:
            break;
    }

    xhttp.open("POST","destino.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("cboOperacion="+operador+"&valorUno="+v1+"&valorDos="+v2);

     xhttp.onreadystatechange = function(){
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            alert(xhttp.responseText);
        }
    }
    
}