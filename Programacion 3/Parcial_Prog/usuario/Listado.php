<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
      $(function () {
        $(document).on('click', '.borrar', function (event)
        {
            event.preventDefault();
            $(this).closest('tr').remove();
        });
      });

    </script>
  </head>
  <body>



<?php

require_once "Usuario.php";

$leer = fopen("usuarios.txt","r");
$array = [];
$band=FALSE;
$band2=FALSE;

while(!feof($leer))
{
    $band=TRUE;
    $archivoAux = fgets($leer);
    $empleado = explode(" - ",$archivoAux);
    $empleado[0] = trim($empleado[0]);

    if($empleado[0] != "")
    {
        $array[] = new Usuario($empleado[0],$empleado[1],$empleado[2],$empleado[3]);
    }
}

fclose($leer);

foreach ($array as $item)
{
  if($item->getEmail()==$_POST["txtEmail"] && $item->getClave()==$_POST["txtClave"])
    $band2=TRUE;
}

if($band==TRUE && $band2==TRUE)
{
  if(count($array) > 0)
  {
      echo '<table style="text-align:center;" class="egt">

              <tr>

                  <th>Nombre</th>

                  <th colspan="3">Email</th>

                  <th>Edad</th>

                  <th>Clave</th>

              </tr>';
          foreach ($array as $index)
          {
              echo "<tr>

                      <td>".$index->getNombre()."</td>

                      <td colspan='3'>".$index->getEmail()."</td>

                      <td>".$index->getEdad()."</td>

                      <td>".$index->getClave()."</td>"; ?>

                      <td><input type='button' class='borrar' value='Eliminar' /></td>

          <?php } ?>

              </table>
              <?php
  }
}
else echo "El Usuario no existe!!!";

 ?>

</body>
</html>
