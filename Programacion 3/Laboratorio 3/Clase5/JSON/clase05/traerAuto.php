<?php

$archivo = fopen("auto.json","r");

$strArchivo = fgets($archivo);

fclose($archivo);

echo $strArchivo;

?>