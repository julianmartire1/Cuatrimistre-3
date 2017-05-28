<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
</head>
<body>
    <form action="administrar.php" method="POST">
        Usuario:
        </br>
        <input type="text" name="altaUsuario">
        </br>
        Password:
        </br>
        <input type="password" name="altaPassword">
        </br>
        Email:
        </br>
        <input type="email" name="altaEmail">
        </br>
        Nombre:
        </br>
        <input type="text" name="altaNombre">
        </br>
        Apellido:
        </br>
        <input type="text" name="altaApellido">
        </br>
        Sexo:
        </br>
        <input type="text" name="altaSexo">
        </br>
        </br>
        <input type="submit" name="crearCuenta" value="Aceptar">
        </br>
        <input type="reset" value="Limpiar datos">
    </form>
</body>
</html>