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
$array=$cosa->TraerTodos();
/*SIN TABLA
foreach ($array as $index) {
    echo "<br/>".$index->ToString()."<br/>";*/
//CON TABLA
    if(count($array) > 0){
	
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>    CODIGO    </th>
                        <th>    VALOR    </th>
                    </tr> 
                </thead>";   	

            foreach ($array as $index){

                echo " 	<tr>
                            <td>".$index->getCodigo()."</td>
                            <td>".$index->getValor()."</td>
                        </tr>";
            }	
        echo "</table>";
    }
    else
        echo "No hay cosas...";
    	

?>