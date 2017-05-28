<?php

$ar = "usuarios.txt";
$totalUsuarios=[];
$ArrayUsuario=[];

echo "<form method='post'>
<table class='table'>
<thead>
<tr>
<th>  Usuario </th>
<th>  Mail     </th>
<th>  Nombre       </th>
<th>  Apellido    </th>
<th>  Sexo    </th>
</tr>
</thead>";


if(file_exists($ar))
{
    $file = fopen($ar,'r');

    while(!feof($file))
    {
        $lineas = fgets($file);
        $usuario = explode("-",$lineas);
        $usuario[0] = trim($usuario[0]);

        if($usuario[0] != "")
        {
            echo "  <tr>
                <td>".$usuario[0]."</td>
                <td>".$usuario[2]."</td>
                <td>".$usuario[3]."</td>
            <td>".$usuario[4]."</td>
            <td>".$usuario[5]."</td>
                </tr>";
        }
    }
}

session_start();

if (!(empty($_SESSION)))
{
    echo "<a href='menu.php'>Volver al menú</a>";
} 
else
{
    echo "<a href='index.php'>Volver al Inicio</a>";
}

?>