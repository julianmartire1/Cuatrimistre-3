<?php

require_once "persona.php";
require_once "Empleado.php";

class Fabrica 
{
    
    private $_empleados;
    private $_razonSocial;

    function __construct($razonSocial="no tiene")
    {
        $this->_empleados=array();
        $this->_razonSocial=$razonSocial;
    }

    function AgregarEmpleado($persona)
    {
        array_push($this->_empleados,$persona);
        $this->EliminarEmpleadosRepetidos();
    }

    function CalcularSueldos()
    {
        $retorno=0;
        foreach ($this->_empleados as $item) {
            $retorno+=$item->getSueldo();
        }

        return $retorno;
    }

    function EliminarEmpleado($empleado)
    {
        $i=0;
        foreach ($this->_empleados as $item) {
            if($item==$empleado)
                unset($this->_empleados[$i]);
            $i++;
        }
    }

    private function EliminarEmpleadosRepetidos()
    {
        $otroArray=array_unique($this->_empleados,SORT_REGULAR);

        $this->_empleados=$otroArray;
    }

    function ToString()
    {
        echo "<font color='green'>Razon Social: </font>".$this->_razonSocial;
        echo "<br/><font color='blue'>EMPLEADOS: </font>";
        foreach ($this->_empleados as $item)
        {
            $item->ToString();
        }
        
    }
}



?>