var curso,nombre,apellido;
var alumno={};
var array=[];
/*nombre="Julian";
apellido="Martire";
curso="Curso 3'A'";*/
/*alumno=[];
alumno[0]=nombre;
alumno[1]=apellido;
alumno[2]="Curso 3'A'";*/

//document.write(nombre);

//alert(nombre + "\n"+ apellido+'\nCurso 3"A"');

/*for (var i = 0; i < alumno.length; i++) {
    alert(alumno[i]);
    
}*/


/*alumno.Nombre=nombre;
alumno.Apellido=apellido;
alumno.Curso=curso;*/
//var alumno={Nombre:alumno,Apellido:apellido,Curso:curso};

function MostrarAlumno() {
    
    //alert(alumno.Nombre +" "+ alumno.Apellido+" " + alumno.Curso);
    var div=document.getElementById("idDiv");
    
    alumno.Nombre=document.getElementById("txtNombre").value;
    alumno.Apellido=document.getElementById("txtApellido").value;
    alumno.Curso=document.getElementById("txtCurso").value; 


alert(alumno.Nombre +" "+ alumno.Apellido+" " + alumno.Curso);

//div.innerHTML=alumno.Nombre +" "+ alumno.Apellido+" " + alumno.Curso;
}

function CambiarColor(ID)
{
    var element;
    element=document.getElementById(ID);
    element.style.color="red";
}

//var alumno2=[Nombre,Apellido,Curso];
function AgregarAlumno()
{
    var nombre=document.getElementById("txtNombre");
    var apellido=document.getElementById("txtApellido");
    var curso=document.getElementById("txtCurso"); 

    alumno={nombre:nombre.value,apellido:apellido.value,curso:curso.value};
    array.push(alumno);
}

function MostrarTodos() {
    var elemento = document.getElementById("idDiv");
    document.getElementById("idDiv").innerHTML = "";

    for (var i = 0; i < array.length; i++) 
    {
        elemento.innerHTML += array[i].nombre+" "+array[i].apellido+" "+array[i].curso + "<br/>";   
        
    }
}