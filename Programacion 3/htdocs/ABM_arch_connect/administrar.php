<?php

require_once "clases/usuario.php";

if(isset($_POST["crearCuenta"]))
{
    $auxUsuario = new Usuario($_POST["altaUsuario"],$_POST["altaPassword"],$_POST["altaEmail"],$_POST["altaNombre"],$_POST["altaApellido"],$_POST["altaSexo"]);

    if(Usuario::GuardarEnTexto($auxUsuario->ToString()))
    {
        echo "Usuario creado, inicie sesión para continuar";
        echo "</br><a href='index.php'>Volver a Inicio</a>";
    }
    else
    {
        echo "Error al crear usuario, intente nuevamente";
        echo "</br><a href='index.php'>Volver a Inicio</a>";
    }
}

?>