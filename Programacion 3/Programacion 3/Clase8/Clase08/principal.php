
<?php


session_start();

var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clase 8</title>
    <script type= "text/javascript" src="jquery.js"></script>
    <script type= "text/javascript" src="funciones.js"></script>
</head>
<body>
        <input type="button" value="Aceptar" onclick="logout()">
        <input type="color" id="color">
        <input type="button" value="Cambiar Color" onclick="color()">
    
</body>
</html>