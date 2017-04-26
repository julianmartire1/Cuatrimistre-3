<?php
require_once "Auto.php";

$auto1=new Auto("Fiat","rojo",1000,"12");
$auto2=new Auto("Fiat","rojo",2000,"12");
$auto3=new Auto("Ford","azul",3000,"12");
$auto4=new Auto("Ford","azul",4000,"12");
$auto5=new Auto("Audi","negro",5000,"12");

$auto5->AgregarImpuesto(1500);
$auto5->MostrarAuto($auto5);

$importeDouble = Auto::Add($auto1, $auto2);

echo "<br/>".$importeDouble;
?>