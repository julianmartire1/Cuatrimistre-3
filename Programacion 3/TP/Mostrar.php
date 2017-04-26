<?php

require_once "Persona.php";
require_once "Empleado.php";
require_once "Fabrica.php";

$leer = fopen("archivos/empleados.txt","r");
$array = [];

while(!feof($leer))
{
    $archivoAux = fgets($leer);
    $empleado = explode(" - ",$archivoAux);
    $empleado[0] = trim($empleado[0]);

    if($empleado[0] != "")
    {
        $array[] = new Empleado($empleado[0],$empleado[1],$empleado[2],$empleado[3],$empleado[4],$empleado[5],$empleado[6]);
    }
}

fclose($leer);

if(count($array) > 0)
{
    echo '<table style="text-align:center;" class="egt">

            <tr>

                <th>Nombre</th>

                <th>Apellido</th>

                <th>DNI</th>

                <th>Sexo</th>

                <th>Legajo</th>

                <th>Sueldo</th>

                <th>Imagen</th>
            </tr>';
        foreach ($array as $index)
        {
            echo "<tr>

                    <td>".$index->getNombre()."</td>

                    <td>".$index->getApellido()."</td>

                    <td>".$index->getDni()."</td>

                    <td>".$index->getSexo()."</td>

                    <td>".$index->getLegajo()."</td>

                    <td>".$index->getSueldo()."</td>

                    <td><img src=archivos/".$index->getPathPersona()."width='200px' height='200px'/></td>";
        }

            echo "</table>";
}

?>
