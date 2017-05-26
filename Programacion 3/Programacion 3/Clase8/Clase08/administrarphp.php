<?php

    if($_POST["op"] == "iniciar")
    {
        if ($_POST["txtEmail"]=="juli@gmail.com" && $_POST["txtPass"]=="123") 
        {
            session_start();
            $_SESSION["usuario"]=$_POST["txtEmail"]."-".$_POST["txtPass"];
            //var_dump($_SESSION["usuario"]);
            echo "ok";

        }
        else  
            echo "No se pudo iniciar sesion";
    }
    else
    {
        if($_POST["op"]=="salir")
        {
            session_start();
            session_destroy();
            echo "sesion finalizada";
        }
        else 
        {
            if($_POST["op"] == "color")
            {
                setcookie("c",$_POST["color"]);
                
                echo $_POST["color"];
            }
        }
    }

    


?>