<!doctype html>
<html>

<body>

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

    function getCodigo()
    {
        return $this->codigo;
    }

    function getValor()
    {
        return $this->codigo;
    }

    function ToString()
    {
        return  /*"Codigo: ".*/$this->codigo . " - ". $this->valor;;
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
            $cosas=explode(" - ",$archivoAux);
            $cosas[0]=trim($cosas[0]);
            if($cosas[0] != "")
                $array[]= new Cosa($cosas[0],$cosas[1]);
            
        }

        fclose($leer);
        return $array;
    }
}




?>

</body>

</html>