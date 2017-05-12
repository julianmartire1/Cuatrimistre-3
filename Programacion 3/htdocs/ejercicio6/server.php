<?php

$array= [];
array_push($array,"jorge");
array_push($array,"juan");
array_push($array,"pepe");
array_push($array,"pepo");

$usuario = $_POST["texto"];
$i=0;

while($i < count($array))
 {
  if($usuario == $array[$i])
  {
    sleep(rand(0,6));
    echo "Usuario encontrado";
    break;
  }

 $i++;
}
if($i==count($array))
{
  sleep(rand(0,6));
  echo "Usuario no encontrado";

}





 ?>
