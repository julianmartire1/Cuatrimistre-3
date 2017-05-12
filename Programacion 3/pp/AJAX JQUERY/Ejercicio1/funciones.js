function sacarImpares()
{
    var xhttp = new XMLHttpRequest();
    var valor = parseInt(document.getElementById("numero").value);

    if (valor > 0)
    {
                xhttp.open("POST","resultado.php",true);
                xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
                xhttp.send("numero="+valor);

                xhttp.onreadystatechange = function(){
                if (xhttp.status == 200 && xhttp.readyState == 4) {
                    alert(xhttp.responseText);
                    }
                }
    }
    else 
    {
        if(isNaN(valor))
        {
            alert("El valor que ingreso no es un número");
        }
        else
        {
            alert("El numero que ingreso es negativo");
        }
    }
}