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
<th> Eliminar </th>
</tr>
</thead>";

$totalUsuarios=1;

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
            <td><input type='submit' name='eliminar$totalUsuarios' value='Eliminar' ></td>
                </tr>";
        }
        $totalUsuarios++;
    }
}

//function borrarUsuario()
//{
for ($i=1; $i <= $totalUsuarios; $i++)
{
    $verificar = isset($_POST["eliminar$i"]) ? TRUE : FALSE;

    if($verificar)
    {
        $archivo = "usuarios.txt";
        $usuarios=[];

        if(file_exists($archivo))
        {
            $file = fopen($archivo,'r');
            $j=1;

            while(!feof($file))
            {
                $lineas=fgets($file);

                if($lineas[0] != "")
                {
                    if($i != $j)
                    {
                        array_push($usuarios,$lineas);
                    }
                }

                $j++;
            }

            fclose($file);
            
        }

        $file = fopen($archivo, "w");

        array_multisort($usuarios);

        foreach($usuarios as $usuario)
        {
            fwrite($file, $usuario);
        }

        fclose($file);
        
        header("location:listadoBaja.php");
    }
}

echo "<a href='menu.php'>Volver al menú</a>";

?>