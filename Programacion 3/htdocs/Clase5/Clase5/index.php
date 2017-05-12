<?php

$band=mysqli_connect("localhost","root","","cdcol");

if ($band==true){
  echo "se pudo conectar";
  $band2=mysqli_query($band,"SELECT * FROM `cds` WHERE 1");
  echo "<br/>";
  $cant=mysqli_num_rows($band2);
  /*for ($i=0; $i < $cant; $i++) {
    $row=mysqli_fetch_object($band2);
    echo $row->titel;
  }*/
  echo '<table style="text-align:center;" border="1" class="egt">

    <tr>
      <th>ID</th>

      <th>Nombre</th>

      <th>Apellido</th>

      <th>Anio</th>

    </tr>';
  for ($i=0; $i < $cant; $i++){
    $row=mysqli_fetch_object($band2);
    echo "<tr>

      <td>".$row->id."</td>

      <td>".$row->titel."</td>

      <td>".$row->interpret."</td>

      <td>".$row->jahr."</td>";
  }

      echo "</table>";



}
else echo "no se pudo conectar";


mysqli_free_result($band2);
//Insert
/*$insert=mysqli_query($band,"INSERT INTO `cds`(`titel`, `interpret`, `jahr`, `id`) VALUES ('asd','asd',1,null)");

if($insert==true)
echo "funciona";
else echo "no funca";*/

//mysqli_free_result($band2);

//UPDATE
/*$insert=mysqli_query($band,"UPDATE `cds` SET `titel`='jjj',`interpret`='jjj',`jahr`=2,`id`=8 WHERE id =8");

if($insert==true)
echo "updeato";
else echo "no updeato";*/

//DELETE
$insert=mysqli_query($band,"DELETE FROM `cds` WHERE id=8");

if($insert==true)
echo "elimino";
else echo "no elimino";
?>
