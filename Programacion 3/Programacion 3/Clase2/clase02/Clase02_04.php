<?php
require_once "clases/clase.php";
require_once "clases/claseDerivada.php";
require_once "clases/claseAbstracta.php";

//--------------------------------------------------------------------------------//

//CREO UN OBJETO
$obj = new Test();

//UTILIZO METODO DE INSTANCIA
echo $obj->Mostrar();
echo "<br/>";
//$obj->FormatearCadena("hola mundo");//ES PRIVADO

//ACCEDO A LOS ATRIBUTOS
//$obj->cadena = "otro valor";//ES PRIVADO
$obj->entero = 3;
$obj->flotante = 6.15;

//UTILIZO METODO DE CLASE
echo Test::MostrarTest($obj);
echo "<br/>";

//--------------------------------------------------------------------------------//
/*
$otroObj = new OtroTest();

//UTILIZO METODO DE INSTANCIA
echo $otroObj->Mostrar();
echo "<br/>";

//UTILIZO METODO DE CLASE
echo OtroTest::MostrarTest($otroObj);
echo "<br/>";

//ACCEDO A ATRUBUTO ESTATICO
OtroTest::$att = "valor pasado";
echo OtroTest::$att;

//UTILIZO METODO DE INTERFACE
$otroObj->MostrarMensaje();

*/
//--------------------------------------------------------------------------------//
/*
$oobj = new Clase("valor padre", "valor hijo");

echo $oobj->getAtributo();
echo "<br/>";
echo $oobj->otroAtributo;
echo "<br/>";

echo $oobj->MetodoAbstracto();
*/
//--------------------------------------------------------------------------------//

?>