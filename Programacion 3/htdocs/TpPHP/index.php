<?php

$connect=mysqli_connect("localhost","root","","baseutn");

//--------------Eje 1--------------

if ($connect==true) {
  echo "se conecto ";/*
  $band2=mysqli_query($connect,"SELECT * FROM productos ORDER BY pNombre ASC");
  $cant=mysqli_num_rows($band2);
  echo $cant;

  echo '<table style="text-align:center;" border="1" class="egt">

    <tr>

      <th>Nombre</th>

      <th>Precio</th>

      <th>Tamanio</th>

    </tr>';
  for ($i=0; $i < $cant; $i++)
  {
      $row=mysqli_fetch_object($band2);
      echo "<tr>

      <td>".$row->pNombre."</td>

      <td>".$row->precio."</td>

      <td>".$row->Tamanio."</td></tr>";
  }

      echo "</table>";*/

} else echo "no se pudo conectar";

//--------------Eje 2--------------
/*
$band2=mysqli_query($connect,"SELECT * FROM provedores WHERE Localidad='Quilmes'");
$cant=mysqli_num_rows($band2);

echo '<table style="text-align:center;" border="1" class="egt">

      <th>Numero</th>

      <th>Nombre</th>

      <th>Domicilio</th>

      <th>Tamanio</th>

      </tr>';

for ($i=0; $i < $cant; $i++)
{
    $row2=mysqli_fetch_object($band2);
    echo "<tr>

    <td>".$row2->Numero."</td>

    <td>".$row2->Nombre."</td>
   <td>".$row2->Domicilio."</td>
    <td>".$row2->Localidad."</td></tr>";


  }

    echo "</table>";*/

  //--------------Eje 3--------------
/*
  $band2=mysqli_query($connect,"SELECT * FROM envios WHERE cantidad BETWEEN 200 and 300");
  $cant=mysqli_num_rows($band2);

  echo '<table style="text-align:center;" border="1" class="egt">

        <th>Numero</th>

        <th>pNumero</th>

        <th>Cantidad</th>

        </tr>';

  for ($i=0; $i < $cant; $i++)
  {
      $row2=mysqli_fetch_object($band2);
      echo "<tr>

      <td>".$row2->Numero."</td>

      <td>".$row2->pNumero."</td>
      <td>".$row2->Cantidad."</td></tr>";


    }

      echo "</table>";*/

//--------------Eje 4--------------
/*
$total=0;
$band2=mysqli_query($connect,"SELECT * FROM envios WHERE Cantidad");
$cant=mysqli_num_rows($band2);
 for ($i=0; $i < $cant; $i++) {
   $row2=mysqli_fetch_object($band2);
   $total+=$row2->Cantidad;
 }

 echo "Total: ".$total;*/

 //--------------Eje 5--------------
/*
$band2=mysqli_query($connect,"SELECT * FROM envios LIMIT 3");
$cant=mysqli_num_rows($band2);
for ($i=0; $i < $cant; $i++) {
  $row2=mysqli_fetch_object($band2);
  echo $i.") ".$row2->pNumero."</br>";
}*/
//--------------Eje 6--------------
/*
$band2=mysqli_query($connect,"SELECT * FROM provedores WHERE 1");
$band3=mysqli_query($connect,"SELECT * FROM productos WHERE 1");
$cant=mysqli_num_rows($band2);
$cant2=mysqli_num_rows($band3);

echo '<table style="text-align:center;" border="1" class="egt">

      <tr><th>Nombre</th>

      <th>Producto</th>

      </tr>';


  for ($i=0; $i < $cant; $i++)
  {
      $row2=mysqli_fetch_object($band2);
      $row3=mysqli_fetch_object($band3);
      echo "<tr>
      <td>".$row2->Nombre."</td>;
      <td>".$row3->pNombre."</td></tr>";


    }

      echo "</table>";
*/

//--------------Eje 7--------------
/*
$datos = mysqli_query($connect,"SELECT * FROM envios");
$datos2=mysqli_query($connect,"SELECT * FROM productos");
$array=Array();
for ($i=0; $i < mysqli_num_rows($datos2); $i++) {
  $row = mysqli_fetch_object($datos2);
  $array[$i]=$row->precio;
}

echo '<table style="text-align:center;" border="1" class="egt"><tr>

      <th>pNumero</th>

      <th>Monto</th>

      </tr>';

        for ($i=0; $i < mysqli_num_rows($datos) ; $i++)
        {
          $monto = 0;
          $monto2 = 0;
          $monto3 = 0;

            $fila = mysqli_fetch_object($datos);
            $fila2=mysqli_fetch_object($datos2);

            switch ($fila->pNumero)
            {
                case 1:
                    $monto = $fila->Cantidad * $array[0];
                    echo "<tr><td>".$fila->pNumero."</td><td>".$monto."</td></tr>";
                    break;
                case 2:
                    $monto2 = $fila->Cantidad * $array[1];
                    echo "<tr><td>".$fila->pNumero."</td><td>".$monto2."</td></tr>";
                    break;
                case 3:
                    $monto3 = $fila->Cantidad * $array[2];
                    echo "<tr><td>".$fila->pNumero."</td><td>".$monto3."</td></tr>";
                    break;
            }
        }
echo "</table>";*/


//--------------Eje 8--------------
/*
$band=mysqli_query($connect,"SELECT * FROM envios");
$cant=mysqli_num_rows($band);
$j=0;
for ($i=0; $i < $cant; $i++) {
  $row=mysqli_fetch_object($band);
  if ($row->pNumero==1 && $row->Numero==102) {
      $j+=$row->Cantidad;
  }
}
echo $j;
*/
//--------------Eje 9--------------
/*
$band=mysqli_query($connect,"SELECT * FROM envios WHERE Numero = 101");
$cant=mysqli_num_rows($band);
$j=0;
echo '<table style="text-align:center>" border="1" >
        <tr>
          <th>Numero</th>
          <th>pNumero</th>
          <th>Cantidad</th>
        </tr>';
for ($i=0; $i < $cant; $i++) {
  $fila=mysqli_fetch_object($band);
  echo  '<tr>

  <td>' .$fila->Numero. '</td>
  <td>' .$fila->pNumero.'</td>
  <td>' .$fila->Cantidad.'</td>

  </tr>';

  }
  echo "</table>";*/

//--------------Eje 10--------------
/*
$band=mysqli_query($connect,"SELECT * FROM provedores WHERE Nombre LIKE '%i%'");
$cant=mysqli_num_rows($band);


echo '<table style="text-align:center>" border="1" >
        <tr>
          <th>Domicilio</th>
          <th>Localidad</th>
        </tr>';
for ($i=0; $i < $cant; $i++) {
  $fila=mysqli_fetch_object($band);
  echo  '<tr>

  <td>' .$fila->Domicilio. '</td>
  <td>' .$fila->Localidad.'</td>

  </tr>';

  }
  echo "</table>";*/

  //--------------Eje 11--------------
  //$band=mysqli_query($connect,"INSERT INTO `productos`(`pNumero`, `pNombre`, `precio`, `Tamanio`) VALUES (4,'Chocolate',25.35,'chico')");
  //--------------Eje 12--------------
  //$insertar = mysqli_query($conect,"INSERT INTO `provedores`(`Numero`) VALUES (103)");
  //--------------Eje 13--------------
  //$band=mysqli_query($connect,"INSERT INTO `provedores`(`Numero`, `Nombre`, `Domicilio`, `Localidad`) VALUES (107,'Rosales','','La Plata')");
//--------------Eje 14--------------
/*
$actualizar = mysqli_query($connect,"UPDATE `productos` SET `Precio`='97.50' WHERE `Tamanio` LIKE 'Grande'");
if($actualizar == true)
{
  echo "<h5>"."Actualizado"."</h5>";
}
*/
//--------------Eje 15--------------
/*
$band=mysqli_query($connect,"SELECT * FROM productos WHERE Tamanio = 'Chico'");
$band2=mysqli_query($connect,"SELECT * FROM envios WHERE 1");
$cant=mysqli_num_rows($band);
$cant2=mysqli_num_rows($band2);

for ($i=0; $i < $cant2; $i++) {
  $row=mysqli_fetch_object($band);
  $row2=mysqli_fetch_object($band2);

  if($row2->Cantidad>=300 && $row->Tamanio=='Chico')
  $band3=mysqli_query($connect,"UPDATE `productos` SET `Tamanio`='Mediano' WHERE Tamanio='Chico'");

}*/

//--------------Eje 16--------------
//$eliminar =  mysqli_query($connect,"DELETE FROM `productos` WHERE 1 LIMIT 1");
//--------------Eje 17--------------


 ?>
