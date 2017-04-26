<?php


abstract class Persona 
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;
    
    function __construct($apellido="no tiene",$nombre="no tiene",$dni=0,$sexo="no tiene")
    {
        $this->_apellido=$apellido;
        $this->_nombre=$nombre;
        $this->_dni=$dni;
        $this->_sexo=$sexo;
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
        return $this->_sexo;
    }

    abstract function Hablar($idioma);

    function ToString()
    {
        $cadena= $this->getNombre() . " - ".$this->getApellido() . " - ".$this->getDni() . " - ".$this->getSexo()." ";
        return $cadena;
    }

}



?>