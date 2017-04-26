<?php

require_once "FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    private $_ladoDos;
    private $_ladoUno;
    
    function __construct($lado1=0,$lado2=0)
    {
        parent::__construct();
        $this->_ladoUno=$lado1;
        $this->_ladoDos=$lado2;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_perimetro=2*($this->_ladoUno + $this->_ladoDos);
        $this->_superficie= $this->_ladoUno * $this->_ladoDos;
    }

    public function Dibujar()
    {

    }

    function ToString()
    {
        parent::ToString();
    }

}


?>