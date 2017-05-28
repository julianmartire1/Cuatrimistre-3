<?php

require_once "clases/usuario.php";

if($_POST["op"] == "login")
{
    $listaDeUsuarios = array();
    $archivo=fopen("usuarios.txt", "r");
    $flag;
    
    while(!feof($archivo))
    {
        $archAux = fgets($archivo);
        $usuario = explode("-", $archAux);
        $usuario[0] = trim($usuario[0]);

        if($usuario[0] != "")
        {
            $listaDeUsuarios[] = new Usuario($usuario[0], $usuario[1], $usuario[2], $usuario[3], $usuario[4], $usuario[5]);
        }
    }

    fclose($archivo);

    foreach ($listaDeUsuarios as $item)
    {
        if ($_POST["txtUser"] == $item->getUsuario() && $_POST["txtPassword"] == $item->getClave())
        {
            session_start();

            $_SESSION["usuario"] = "Usuario: ".$item->getUsuario();

            $flag = TRUE;
            break;
        }
        else 
        {
           $flag = FALSE;
        }
    }

    if($flag == TRUE)
    {
        echo "OK";
    }
    else
    {
        echo "No OK";
    }
    
}

if($_POST["op"] == "logout")
{
    session_start();

    session_destroy();
    echo "salir";
}


?>