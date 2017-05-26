<?php

if($_POST["op"] == "agregarRemera")
{
    $archivo = fopen("remeras.json","r");

    $strArchivo = fread($archivo,filesize("remeras.json"));

    fclose($archivo);

    $remeras = json_decode($strArchivo,true);

    $remeraNueva['id'] = $_POST["id"];
    $remeraNueva['slogan'] = $_POST["slogan"];
    $remeraNueva['size'] = $_POST["size"];
    $remeraNueva['price'] = $_POST["price"];
    $remeraNueva['color'] = $_POST["color"];
    $remeraNueva['manofacturer']['name'] = $_POST["manofacturer"];
    $remeraNueva['manofacturer']['logo'] = $_POST["logo"];
    $remeraNueva['manofacturer']['location']['country'] = $_POST["country"];
    $remeraNueva['manofacturer']['location']['city'] = $_POST["city"];
    array_push($remeras, $remeraNueva);

    $strRemeraAgregada = json_encode($remeras);

    if (json_decode($strRemeraAgregada) != null)
    {
        $sobreescribir = fopen('remeras.json','w+');
        
        fwrite($sobreescribir, $strRemeraAgregada);
        
        fclose($sobreescribir);
    }

    $json = file_get_contents("remeras.json");
    $remerasActualizado = json_decode($json,true);

    echo "<table class='table'><tr><th>ID</th><th>SLOGAN</th><th>TAMAÑO</th><th>PRECIO</th><th>COLOR</th><th>NOMBRE FABRICANTE</th><th>FOTO</th><th>PAIS</th><th>CIUDAD</th></tr>";

    foreach($remerasActualizado as $item)
    {
        echo "<tr><td>".$item["id"]."</td><td>". $item["slogan"] . "</td><td>" . $item["size"] . "</td><td>" . $item["price"] . "</td><td>" . $item["color"] . "</td><td>" . $item["manofacturer"]["name"] . "</td><td><img src=" . $item["manofacturer"]["logo"]."></img></td><td>". $item["manofacturer"]["location"]["country"] ."</td><td>" . $item["manofacturer"]["location"]["city"] . "</td></tr>";
    }

    echo "</table>";

}

if($_POST["op"] == "listarRemeras")
{
    $archivo = fopen("remeras.json","r");

    $strArchivo = fread($archivo,filesize("remeras.json"));

    fclose($archivo);

    $remeras = json_decode($strArchivo,true);

    echo "<table class='table'><tr><th>ID</th><th>SLOGAN</th><th>TAMAÑO</th><th>PRECIO</th><th>COLOR</th><th>NOMBRE FABRICANTE</th><th>FOTO</th><th>PAIS</th><th>CIUDAD</th><th>ACCIÓN</th></tr>";

    foreach ($remeras as $item)
    {
        echo "<tr><td>".$item["id"]."</td><td>". $item["slogan"] . "</td><td>" . $item["size"] . "</td><td>" . $item["price"] . "</td><td>" . $item["color"] . "</td><td>" . $item["manofacturer"]["name"] . "</td><td><img src=" . $item["manofacturer"]["logo"]."></img></td><td>". $item["manofacturer"]["location"]["country"] ."</td><td>" . $item["manofacturer"]["location"]["city"] . "</td><td><a href='paginaPrincipal.html' onclick='borrarRemera(".$item['id'].")'>Eliminar</a></td></tr>";
    }

    echo "</table>";
}

if($_POST["op"] == "quitarRemera")
{
    $archivo = fopen("remeras.json","r");

    $strArchivo = fread($archivo,filesize("remeras.json"));

    fclose($archivo);

    $remeras = json_decode($strArchivo,true);

    $remerasConBorrar = array();

    foreach ($remeras as $item)
    {
        if($item["id"] == $_POST["id"])
        {

        }
        else
        {
            array_push($remerasConBorrar, $item);
        }
    }

    $strRemeraBorrada = json_encode($remerasConBorrar);

    if (json_decode($strRemeraBorrada) != null)
    {
        $sobreescribir = fopen('remeras.json','w+');
        
        fwrite($sobreescribir, $strRemeraBorrada);
        
        fclose($sobreescribir);
    }
}

?>