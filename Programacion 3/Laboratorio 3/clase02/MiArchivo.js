var nombre;
var apellido;
var curso;
var i;
var alumnos;

window.onload=function()
{
    CambiarColor("span");
    CambiarColor("spanDos");
    CambiarColor("spanTres");
    var boton = document.getElementById("btnMostrar");
    boton.onclick = MostrarAlumno;
}

alumnos = [];
//nombre = "Juan Martin";
//apellido = "Pollio";
//curso = "Curso 3º'A'";

//alumno = Array() //o de esta forma-> [];
//alumno[0] = nombre;
//alumno[1] = apellido;
//alumno[2] = "Curso 3º'A'";

//document.write(nombre);
//alert(nombre+"\n"+apellido+'\nCurso 3º"A"');

/*for(i=0;i<alumno.length;i++)
{
    alert(alumno[i]);
}*/

//alert(alumno.nombre+"\n"+alumno.apellido+"\n"+alumno.curso);

//FUNCIONES

function MostrarAlumno()
{
    var elemento = document.getElementById("idDiv"); //devuelve un HTMLelement
    var nombre = document.getElementById("txtNombre");
    var apellido = document.getElementById("txtApellido");
    var curso = document.getElementById("txtCurso");
    var alumno = {nombre:nombre.value,apellido:apellido.value,curso:curso.value};
    
    alert(nombre.value+"\n"+apellido.value+"\n"+curso.value);
    elemento.innerHTML = nombre.value+"<br/>"+apellido.value+"<br/>"+curso.value;
    alumnos.push(alumno);
}

function CambiarColor(id)
{
    var elemento;
    elemento = document.getElementById(id);
    elemento.style.color = "Blue";
}

function MostrarTodos()
{
    var elemento = document.getElementById("idDiv");

    for (var i = 0; i < alumnos.length; i++) 
    {
        elemento.innerHTML = alumnos[i].nombre+"<br/>"+alumnos[i].apellido+"<br/>"+alumnos[i].curso;   
    }
}