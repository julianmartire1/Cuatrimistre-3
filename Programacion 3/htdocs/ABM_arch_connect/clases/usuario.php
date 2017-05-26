<?php

class Usuario
{
    private $_usuario;
    private $_clave;
    private $_email;
    private $_nombre;
    private $_apellido;
    private $_sexo;

    function __construct($usuario,$clave,$email,$nombre,$apellido,$sexo)
    {
        $this->_usuario = $usuario;
        $this->_clave = $clave;
        $this->_email = $email;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_sexo = $sexo;
    }

    function ToString()
    {
        return $this->_usuario."-".$this->_clave."-".$this->_email."-".$this->_nombre."-".$this->_apellido."-".$this->_sexo;
    }

    function getApellido()
    {
        return $this->_apellido;
    }

    function getEmail()
    {
        return $this->_email;
    }

    function getNombre()
    {
        return $this->_nombre;
    }

    function getSexo()
    {
        return $this->_sexo;
    }

    function getClave()
    {
        return $this->_clave;
    }

    function getUsuario()
    {
        return $this->_usuario;
    }

    function setApellido($value)
    {
        $this->_apellido = $value;
    }

    function setEmail($value)
    {
        $this->_email = $value;
    }

    function setSexo($value)
    {
        $this->_sexo = $value;
    }

    function setClave($value)
    {
        $this->_clave = $value;
    }

    function setNombre($value)
    {
        $this->_nombre = $value;
    }

    public static function GuardarEnTexto($string)
    {
        $resultado = FALSE;

        $archivo = fopen("usuarios.txt","a");
        $escribo = fwrite($archivo,$string."\r\n");

        if($escribo > 0)
        {
            $resultado = TRUE;
        }

        fclose($archivo);
        return $resultado;
    }

    public static function GuardarEnBD($objeto)
    {
        
    }
}


?>