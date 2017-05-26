<?php

require_once "clases/usuario.php";

if($_POST["op"] == "modificar")
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
    
    $archivoEscribir = fopen("usuarios.txt","w");

    foreach ($listaDeUsuarios as $item)
    {
        if ($item->getClave() == $_POST["passwordActual"])
        {
            $item->setClave($_POST["modifPassword"]);
            $item->setNombre($_POST["modifNombre"]);
            $item->setApellido($_POST["modifApellido"]);
            $item->setEmail($_POST["modifEmail"]);
            $item->setSexo($_POST["modifSexo"]);
        }
    }
    
    $resultado = FALSE;

    foreach ($listaDeUsuarios as $item)
    {
        $escribo = fwrite($archivoEscribir,$item->ToString()."\r\n");

        if($escribo > 0)
        {
            $resultado = TRUE;
        }
    }

    fclose($archivoEscribir);

    if ($resultado == TRUE)
    {
        echo "ok";
    } 
    else 
    {
        echo "no ok";
    }
}

?>