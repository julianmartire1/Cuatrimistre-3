<?php

if(isset($_POST["Enviar"]))
{
    echo "<body style='background:black'> 
        <h1 style='color:".$_POST["cambiarColorNombre"]."'>Nombre: ".$_POST['txtNombre']."</h1>
        <br/>
        <h1 style='color:".$_POST["cambiarColorEdad"]."'>Edad: ".$_POST['txtEdad']."</h1>
        <br/>
        <h1 style='color:".$_POST["cambiarColorEmail"]."'>Email: ".$_POST['txtEmail']."</h1>
        <br/>
        <h1 style='color:".$_POST["cambiarColorPassword"]."'>Password: ".$_POST['txtPassword']."</h1>
        <br/>
        <h1 style='color:".$_POST["cambiarColorPais"]."'>Pais: ".$_POST['txtPais']."</h1>
        </p><body/>";
}


?>