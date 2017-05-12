<!doctype html>
<html>

    <head>
    <meta charset="utf-8"/>

    </head>

    <body>

        <!--<form action="Servidor.php">
            Nombre del archivo:
            <input type="text" name="txtNombreArchivo"/><br/>
            Texto:
            <input type="text" name="txtTexto"/>
            <input type="submit" name="sbEnviar"/>
            <input type="submit" value="Leer" name="sbLeer"/>
            

        </form>-->

        <form action="Servidor.php">

        Codigo:
        <input type="text" name="txtCodigo" require><br/>
        Valor:
        <input type="text" name="txtValor" require><br/>

        <input type="submit" name="sbEnviar">

        <!--<input type="button" value="Leer Todos" name="btnTodos" onclick="">-->
        </form>

    </body>

</html>