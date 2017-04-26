var resultado=0;
var idPasado;
function PasarId(ID) {
    idPasado=ID;
}

function Mostrar() {
    var nu1=document.getElementById("txtNumero1").value;
    var nu2=document.getElementById("txtNumero2").value;
    switch (idPasado)
    {
        case "rdSumar":
            resultado=parseInt(nu1)+parseInt(nu2);
            break;
        case "rdRestar":
            resultado=parseInt(nu1)-parseInt(nu2);
            break;
        case "rdMulti":
            resultado=parseInt(nu1)*parseInt(nu2);
            break;
        case "rdDividir":
            resultado=parseInt(nu1)/parseInt(nu2);
            break;
    }
    alert(resultado);
}