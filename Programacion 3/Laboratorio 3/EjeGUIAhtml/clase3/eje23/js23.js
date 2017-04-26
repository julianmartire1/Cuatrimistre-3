


function validarNumero() {
  if ((event.keyCode < 45 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && (event.keyCode != 8))
    {
        alert("Se presionó una tecla que no es un número");
        event.returnValue = false;
    }
}
