<?php
require_once "Usuario.php";
echo $_POST["valores"];

$leer = fopen("usuarios.txt","r");
$array = [];/*
$band=FALSE;
$band2=FALSE;*/

while(!feof($leer))
{
    $band=TRUE;
    $archivoAux = fgets($leer);
    $empleado = explode(" ",$archivoAux);
    $empleado[0] = trim($empleado[0]);


    if($empleado[0] != "")
    {
        //$valFile=$empleado[0]." ".$empleado[1]." ".$empleado[2]." ".$empleado[3];
        //echo $valFile;
        //echo "(".$valFile.")==(".$_POST["valores"].")";
        $usuario=new Usuario($empleado[0],$empleado[1],$empleado[2],$empleado[3]);
        //if(strcmp($valFile,$_POST["valores"])!=0)
        if($usuario->ToString()==$_POST["valores"])
        {
          //echo "(".$valFile.")==(".$_POST["valores"].")";
          array_push($array,$usuario);
        }
        else echo "se elimina";
    }

}
$guardar="\n";
$f2 = fopen("usuarios.txt","w");
foreach ($array as $item) {
  $guardar+=$item->ToString();
}
echo $guardar
$escribo = fwrite($f2,$guardar);

fclose($leer);
fclose($f2);

 ?>
