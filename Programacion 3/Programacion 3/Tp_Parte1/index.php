<?php


require_once "persona.php";
require_once "Empleado.php";
require_once "Fabrica.php";

$fabrica=new Fabrica("Empresa 1");
$empleado1=new Empleado("jorge","lopez",40000000,"Masculino",1234,2000);
$empleado2=new Empleado("jorge","lopez",40000000,"Masculino",1234,2000);
$empleado3=new Empleado("A","A",40009900,"Femenino",5678,3000);
$empleado4=new Empleado("B","B",40055500,"Masculino",91011,5000);

$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado2);
$fabrica->AgregarEmpleado($empleado3);
$fabrica->AgregarEmpleado($empleado4);

$fabrica->ToString();

$sueldoTotal=$fabrica->CalcularSueldos();

echo "<br/>-------------------------<br/>Sueldo Total: ".$sueldoTotal."<br/>-------------------------";

//$empleado->ToString(); 

echo "<br/><font color='red'>Elimino empleado 4</font><br/>";

$fabrica->EliminarEmpleado($empleado4);

$fabrica->ToString();

?>