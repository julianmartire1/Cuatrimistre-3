<?php

require_once "Persona.php";

class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;
    protected $_pathPersona;

    function __construct($nombre = "sin nombre",$apellido = "sin apellido",$dni = 0,$sexo = "sin sexo",$legajo = 0,$sueldo = 0,$pathPersona = "")
    {
        parent::__construct($nombre,$apellido,$dni,$sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        $this->_pathPersona = $pathPersona;
    }

    function Hablar($idioma)
    {
        return "El empleado habla: ".$idioma;
    }

    function ToString()
    {
        return parent::ToString() . " - " . $this->_legajo . " - " . $this->_sueldo . " - " . $this->_pathPersona ."\r\n";
    }

    function getLegajo()
    {
        return $this->_legajo;
    }

    function getSueldo()
    {
        return $this->_sueldo;
    }

    function getPathPersona()
    {
        return $this->_pathPersona;
    }
}      

?>