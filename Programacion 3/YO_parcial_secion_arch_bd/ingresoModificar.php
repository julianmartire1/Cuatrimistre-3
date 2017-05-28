<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
    <script type="text/javascript" src="funciones.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
        <?php
            session_start();

            echo "USTED INGRESÓ COMO: ".$_SESSION["usuario"];
        ?>
        </br>
        </br>
        <form id="form">
            Password vieja:
            </br>
            <input type="password" name="passwordActual" id="passwordActual">
            </br>
            Password nueva:
            </br>
            <input type="password" name="modifPassword" id="modifPassword">
            </br>
            Email:
            </br>
            <input type="email" name="modifEmail" id="modifEmail">
            </br>
            Nombre:
            </br>
            <input type="text" name="modifNombre" id="modifNombre">
            </br>
            Apellido:
            </br>
            <input type="text" name="modifApellido" id="modifApellido">
            </br>
            Sexo:
            </br>
            <input type="text" name="modifSexo" id="modifSexo">
            </br>
            </br>
            <input type="button" name="modificarDatos" value="Guardar cambios" onclick="actualizarDatos()">
            </br>
            <input type="reset" value="Limpiar datos">
            </br>
            </br>
            <a href="menu.php"><input type="button" value="Volver al menú de usuario"></a>
        </form>
</body>
</html>