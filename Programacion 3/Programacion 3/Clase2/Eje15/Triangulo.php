<?php 


require_once "FiguraGeometrica.php";

class Triangulo extends FiguraGeometrica
{
    private $_altura;
    private $_base;
    
    function __construct($altura=0,$base=0)
    {
        parent::__construct();
        $this->_altura=$altura;
        $this->_base=$base;
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