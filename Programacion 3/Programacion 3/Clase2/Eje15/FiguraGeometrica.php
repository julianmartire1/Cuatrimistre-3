<?php

abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    function __construct($color="sin color",$perimietro=0,$superficie=0)
    {
        $this->_color=$color;
        $this->_perimetro=$perimietro;
        $this->_superficie=$superficie;
    }

    protected abstract function CalcularDatos();

    abstract function Dibujar();
    

    function GetColor()
    {
        return $this->color;
    }

    function SetColor($color)
    {
        $this->color=$color;
    }

    function ToString()
    {
         echo "Color: ".$this->_color. " - Perimietro: ". $this->_perimetro. " - Superficie: ".$this->_superficie;
    }
}

?>