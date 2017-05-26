<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
</head>
<body>
        Usuario:
        </br>
        <input type="text" name="txtUser" id="txtUser">
        </br>
        Clave:
        </br>
        <input type="password" name="txtPassword" id="txtPassword">
        </br>
        </br>
        <input type="button" name="entrar" value="Ingresar" onclick="verificarUsuario()">
        <a href="alta.php"><input type="button" name="usuarioNuevo" value="Crear cuenta"></a>
        </br>
        </br>
        <a style="color:red;" href="listado.php">Lista de usuarios</a>
</body>
</html>