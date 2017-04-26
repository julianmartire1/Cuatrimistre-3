<?php

require_once "persona.php";


class Empleado extends Persona
{
    
    protected $_legajo;
    protected $_sueldo;
    protected $_imagen;

    function __construct($apellido,$nombre,$dni,$sexo,$legajo=0,$sueldo=0,$imagen="sin imagen")
    {   
        parent::__construct($apellido,$nombre,$dni,$sexo);
        $this->_legajo=$legajo;
        $this->_sueldo=$sueldo;
        $this->_imagen=$imagen;
    }

    function getLegajo()
    {
        return $this->_legajo;
    }

    function getSueldo()
    {
        return $this->_sueldo;
    }

    function getImagen()
    {
        return $this->_imagen;
    }

    public function Hablar($idioma)
    {
        return "EL empleado habla ".$idioma;
    }

    public function ToString()
    {
        $cadena= parent::ToString()." - ".$this->getLegajo() . " - ". $this->getSueldo(). " - ".$this->getImagen();
        return $cadena;
    }
}


?>