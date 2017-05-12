<?php

require_once "persona.php";


class Empleado extends Persona
{
    
    protected $_legajo;
    protected $_sueldo;

    function __construct($apellido,$nombre,$dni,$sexo,$legajo=0,$sueldo=0)
    {   
        parent::__construct($apellido,$nombre,$dni,$sexo);
        $this->_legajo=$legajo;
        $this->_sueldo=$sueldo;
    }

    function getLegajo()
    {
        return $this->_legajo;
    }

    function getSueldo()
    {
        return $this->_sueldo;
    }

    public function Hablar($idioma)
    {
        return "EL empleado habla ".$idioma;
    }

    public function ToString()
    {
        $cadena= parent::ToString()." - ".$this->getLegajo() . " - ". $this->getSueldo();
        return $cadena;
    }
}


?>