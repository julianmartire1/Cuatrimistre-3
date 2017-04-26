<?php

function Imprimir()
{
    echo "Hola";   
}

function ImprimirValor($nombre="Pepe")
{
    echo "Hola ".$nombre;
}

function ImprimirValores($string,$int=3)
{
    echo $string." tiene ".$int;
}

function ImprimirValoresNada($string="Jorge",$int=3)
{
    echo $string." tiene ".$int;
}

?>