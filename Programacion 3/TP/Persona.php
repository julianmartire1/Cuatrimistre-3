<?php

abstract class Persona
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;

    function __construct($nombre = "sin nombre",$apellido = "sin apellido",$dni = 0,$sexo = "sin sexo")
    {
        $this->_apellido = $apellido;
        $this->_dni = $dni;
        $this->_nombre = $nombre;
        $this->_sexo = $sexo;
    }

    abstract function Hablar($idioma);

    function ToString()
    {
        return $this->_nombre." - ".$this->_apellido." - ".$this->_sexo." - ".$this->_dni;
    }

    function getApellido()
    {
        return $this->_apellido;
    }

    function getDni()
    {
        return $this->_dni;
    }

    function getNombre()
    {
        return $this->_nombre;
    }

    function getSexo()
    {
        return $this->_dni;
    }

    public static function Guardar($objeto)
    {
        $resultado = FALSE;

        $archivo = fopen("archivos/empleados.txt","a");
        $escribo = fwrite($archivo,$objeto->ToString());

        if($escribo > 0)
        {
            $resultado = TRUE;
        }

        fclose($archivo);
        return $resultado;
    }
}

?>