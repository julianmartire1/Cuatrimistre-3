<?php

$coleccion = json_decode(json_encode($_POST["objJson"]));

foreach ($coleccion as $item) 
{
    echo $item->codigoBarra . " - " . $item->nombre ." - " . $item->precio . "\n";
}


?>