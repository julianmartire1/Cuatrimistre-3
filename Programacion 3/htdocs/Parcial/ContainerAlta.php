<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>alta</title>
  </head>
  <body>
    <form id="FormIngreso" method="post" enctype="multipart/form-data">
      <input type="numero" name="numero" placeholder="Ingrese numero"  />
      <input type="text" name="descripcion" placeholder="Ingrese descripcion"  />
      <input type="text" name="pais" placeholder="Ingrese pais">
      <input type="file" name="archivo" />

      <input type="submit" class="agregar" name="guardar" />
    </form>
  </body>
</html>
<?php

  class agregar
  {
    agregar::guardardb();
    public static function Guardardb()
    {
      try
      {
        $pdo = new PDO("mysql:host=localhost;dbname=containers","root","");
        echo "ConexiÃ³n establecida<br/>";

        $consulta = $pdo->prepare("INSERT INTO `containers`(`numero`, `descripcion`, `pais`, `foto`) VALUES (:numero,:descripcion,:pais,:foto)");
        $consulta->bindParam(":numero",$_POST["numero"]);
        $consulta->bindParam(":descripcion",$_POST["descripcion"]);
        $consulta->bindParam(":pais",$_POST["pais"]);
        $consulta->bindParam(":foto",$_POST["foto"]);

        return $consulta->execute();
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }
  }

?>
