
<?php

echo "nombre: ".$_FILES["archivo"]["name"];

require_once "persona.php";
require_once "Empleado.php";
require_once "Fabrica.php";

$destino=$_FILES["archivo"]["name"];

move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino);

$empleado=new Empleado($_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtDni"],$_POST["txtSexo"],$_POST["txtLegajo"],$_POST["txtSueldo"],$_FILES["archivo"]["name"]);
//echo $_POST["txtNombre"];
$f=fopen("empleados.txt","a");
    if(fwrite($f,$empleado->ToString()."\r\n")>0)
        {
            echo "<br/>Escrito";
            echo "<br/><a href='mostrar.php'>Mostrar</a>";
        }
    else
    { 
        echo "<br/>error";
        echo "<br/><a href='index.php'>Index</a>";
    }
fclose($f);

?>