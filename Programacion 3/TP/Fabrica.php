<?php

require_once "Persona.php";
require_once "Empleado.php";

class Fabrica
{
    private $_empleados;
    private $_razonSocial;

    function __construct($razonSocial = "sin nombre")
    {
        $this->_empleados = array();
        $this->_razonSocial = $razonSocial;
    }

    function AgregarEmpleado($persona)
    {
        array_push($this->_empleados,$persona);
        $this->EliminarEmpleadosRepetidos();
    }

    function CalcularSueldos()
    {
        $sueldo = 0;

        foreach ($this->_empleados as $item) 
        {
            $sueldo = $sueldo + $item->getSueldo();
        }

        return $sueldo;
    }

    function EliminarEmpleado($persona)
    {
        $i = 0;

        foreach($this->_empleados as $item) 
        {
            if($item == $persona)
            {
                unset($this->_empleados[$i]);
            }
            $i++;
        }

        array_multisort($this->_empleados);
    }

    private function EliminarEmpleadosRepetidos()
    {
        $arrayAux = array_unique($this->_empleados,SORT_REGULAR);
        $this->_empleados = $arrayAux;
        array_multisort($this->_empleados);
    }

    function ToString()
    {
        echo "Fabrica: ".$this->_razonSocial." <br/>";
        echo "Total neto de sueldos: ".$this->CalcularSueldos();
        echo "<br/>Empleados: ";

        foreach ($this->_empleados as $item) 
        {
            echo "<br/>";
            $item->ToString();
        }
    }
}

?>
