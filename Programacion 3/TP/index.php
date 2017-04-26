<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Página principal</title>
    </head>
    <body>
        <form action="Administracion.php" method="post" enctype="multipart/form-data">
        Nombre:<br/><input type="text" name="txtNombre"/>
        <br/>
        Apellido:<br/><input type="text" name="txtApellido"/>
        <br/>
        DNI:<br/><input type="text" name="txtDNI"/>
        <br/>
        Sexo:<br/><input type="text" name="txtSexo"/>
        <br/>
        Legajo:<br/><input type="text" name="txtLegajo"/>
        <br/>
        Sueldo:<br/><input type="text" name="txtSueldo"/>
        <br/>
        <br/>
        <input type="file" name="archivo"/>
        <br/>
        <br/>
        <input type="submit" name="Enviar"/>
        </form>
    </body>


</html>