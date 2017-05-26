<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clase 8</title>
    <script type= "text/javascript" src="jquery.js"></script>
    <script type= "text/javascript" src="funciones.js"></script>
</head>
<body>
    <form action="administrarphp.php" method="post" id="form">
        Email:<input type="text" id="txtEmail" name="txtEmail"></br>
        Pass<input type="text"id="txtPass" name="txtPass"></br>
        <input type="submit" value="Aceptar" onclick="login()">
    </form>
</body>
</html>