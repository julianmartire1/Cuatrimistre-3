<?php
require_once "Usuario.php";
  $resultado = FALSE;
  $objeto=new Usuario($_POST["txtNombre"],$_POST["txtEmail"],
  $_POST["txtEdad"],$_POST["txtClave"]);
  $archivo = fopen("usuarios.txt","a");
  $escribo = fwrite($archivo,$objeto->ToString());

  if($escribo > 0)
  {
      $resultado = TRUE;
      echo "Archivo Guardado";
  }
  else {
    echo "No se pudo guardar el archivo";
  }

  fclose($archivo);

 ?>
