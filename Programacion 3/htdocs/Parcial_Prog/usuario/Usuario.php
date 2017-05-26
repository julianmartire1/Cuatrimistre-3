<?php

class Usuario
{
  private $_nombre,$_email,$_edad,$_clave;
  function __construct($n,$em,$c,$e)
  {
    $this->_nombre=$n;
    $this->_email=$em;
    $this->_edad=$e;
    $this->_clave=$c;
  }

  function ToString()
  {
      return $this->_nombre." ".$this->_email." ".$this->_clave." ".$this->_edad;
  }

  function getEmail()
  {
      return $this->_email;
  }

  function getClave()
  {
      return $this->_clave;
  }

  function getNombre()
  {
      return $this->_nombre;
  }

  function getEdad()
  {
      return $this->_edad;
  }

}


 ?>
