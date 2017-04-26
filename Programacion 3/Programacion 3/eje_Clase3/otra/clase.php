<?php


class Cosa 
{
    public $codigo;
    public $valor;

    function __construct($cod,$val)
    {
        $this->codigo=$cod;
        $this->valor=$val;
    }

    function ToString()
    {
        return  "Codigo: ".$this->codigo . " - Valor: ". $this->valor;;
    }

    function Agregar()
    {
        $archivo=fopen("cosas.txt","a");
        if(fwrite($archivo,$this->ToString()."\r\n")>0)
        echo "Escrito";
        else echo "error";

        fclose($archivo);
    }

    function TraerTodos()
    {
        $leer=fopen("cosas.txt","r");
        $array=[];

        while(!feof($leer))
        {
            $archivoAux=fgets($leer);
            $array=explode($leer,)
        }

        fclose($leer);
        return 
    }
}




?>