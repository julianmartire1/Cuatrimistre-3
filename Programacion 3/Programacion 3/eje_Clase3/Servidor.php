<?php
 require_once "otra/clase.php";
/*var_dump($_REQUEST);
echo "</br>";
var_dump($_POST);
echo "</br>";
var_dump($_GET);*/
/*
if(isset($_GET["sbEnviar"]))
{   
    $f=fopen($_GET["sbEnviar"],"a");
    fwrite($f,$_GET["txtTexto"]."\r\n");
    fclose($f);
}
else
{
    if(isset($_GET["sbLeer"]))
    {
        $fread=fopen("texto.txt","r");
        $linea=fread($fread,filesize("texto.txt"));
        echo $linea;
        fclose($fread);
    }
}*/



//fread($f,filesize($f))

$cosa=new Cosa($_GET["txtCodigo"],$_GET["txtValor"]);
$cosa->Agregar();

?>