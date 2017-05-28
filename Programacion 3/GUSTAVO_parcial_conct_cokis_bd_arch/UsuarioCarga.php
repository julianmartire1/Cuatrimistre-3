<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina1</title>
  </head>
  <body>
      <form method="post">
          <input type="text" name="Name" placeholder="Nombre">
          <input type="password" name="Pass" placeholder="Contraseña">
          <input type="mail" name="mail" placeholder="email">
          <input type="number" name="edad" placeholder="Edad">
          <input type="submit" name="enviar" value="Enviar">
      </form>
  </body>
</html>

<?php
      require_once "usuario.php";

      $alta = isset($_POST["enviar"]) ? TRUE : FALSE;

      if($alta)
      {
          $usuario=new usuario($_POST["Name"],$_POST["Pass"],$_POST["mail"],$_POST["edad"]);

          $ar = "usuarios.txt";

          if(file_exists($ar))
          {
              $ar = fopen("usuarios.txt", "a");
              fwrite($ar,$usuario->ToString()."\r\n");
          }
          else
          {
              $ar = fopen("usuarios.txt", "w+");
              fwrite($ar,$usuario->ToString()."\r\n");
          }
          fclose($ar);
          header("Location:VerificarUsuario.php");
      }


?>
