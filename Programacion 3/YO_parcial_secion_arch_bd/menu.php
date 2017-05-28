<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu de usuario</title>
    <script type="text/javascript" src="funciones.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <?php
    session_start();

    echo "USTED INGRESÓ COMO: ".$_SESSION["usuario"];

    ?>
    </br>
    <a href="listado.php"><input type="button" name="listado" value="Listar usuarios"></a>
    </br>
    <a href="listadoBaja.php"><input type="button" name="baja" value="Borrar usuario"></a>
    </br>
    <a href="ingresoModificar.php"><input type="button" name="modificar" value="Cambiar datos de usuario"></a>
    </br>
    </br>
    <input type="button" name="salir" value="Desloguearse" onclick="cerrarUsuario()">
</body>
</html>