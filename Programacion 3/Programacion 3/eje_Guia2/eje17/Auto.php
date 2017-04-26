<?php


class Auto 
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    /*function __construct($marca,$color)
    {
        $this->_color=$color;
        $this->_marca=$marca;
    }

    function __construct($marca,$color,$precio)
    {
        $this->_color=$color;
        $this->_marca=$marca;
        $this->_precio=$precio;
    }*/

    function __construct($marca,$color,$precio,$fecha)
    {
        $this->_color=$color;
        $this->_marca=$marca;
        $this->_precio=$precio;
        $this->_fecha=$fecha;
    }

    function Add($auto1, $auto2)
    {
        $resultado=0;
        if($auto1->_marca == $auto2->_marca && $auto1->_color == $auto2->_color)
            return $resultado=$auto1->_precio + $auto2->_precio;
        return 0;
    }

    function AgregarImpuesto($p)
    {
        $this->_precio+=$p;
    }

    function MostrarAuto($auto)//no funca con abstract
    {
        echo "Marca: ". $auto->_marca . " - Color: ". $auto->_color . " - Precio: ". $auto->_precio . " - Fecha: ". $auto->_fecha;
    }

    function Equals($auto1,$auto2)
    {
        if($auto1->_marca == $auto2->_marca)
            return true;
        return false;
    }
}



?>