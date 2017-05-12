<?php

require_once "Empleado.php";
require_once "Fabrica.php";


$destino = "archivos/" . $_FILES["archivo"]["name"];

$uploadOk = TRUE;

$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);




    //VERIFICO EL TAMAÑO MAXIMO SEA 1Mb(1024000)
    if ($_FILES["archivo"]["size"] > 1024000)
    {
        $uploadOk = FALSE;
        echo "El archivo es demasiado grande. Verifique!!!";
    }
    //Verifica SI EL ARCHIVO si es o no una imagen
    $esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);


    if($esImagen === FALSE)
    {//NO ES UNA IMAGEN
        $uploadOk = FALSE;
        echo "S&oacute;lo son permitidas IMAGENES.";
    }
    else
    {// ES UNA IMAGEN
        //SOLO PERMITO CIERTAS EXTENSIONES
        if($tipoArchivo != "jpg" && $tipoArchivo != "jpeg" && $tipoArchivo != "gif"
        && $tipoArchivo != "png" && $tipoArchivo != "bmp")
          {
            $uploadOk = FALSE;
            echo "S&oacute;lo son permitidas imagenes con extensi&oacute;n JPG, JPEG, PNG, GIF o BMP.";
          }
    }

    $nombreNuevo = "archivos/" . $_POST["txtDNI"] . "-" . $_POST["txtApellido"] . "." .  $tipoArchivo;

    if(file_exists($nombreNuevo))
    {
        $uploadOk = FALSE;
        echo "La imagen ya existe";
    }
    else
    {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
        rename($destino,$nombreNuevo);
    }


    if ($uploadOk===FALSE) {
      echo "No se guarda el Archivo";
      echo "<br/><a href='index.php'>Volver a la página principal</a>";
    }
    else
    {
      move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
      $empleado = new Empleado($_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtDNI"],$_POST["txtSexo"],$_POST["txtLegajo"],$_POST["txtSueldo"],$nombreNuevo);

      if(isset($_POST["Enviar"]))
      {
          if (Empleado::Guardar($empleado))
          {
              echo "Archivo guardado";
              echo "<br/><a href='Mostrar.php'>Mostrar datos en página</a>";
          }
          else
          {
              echo "Error al guardar archivo";
              echo "<br/><a href='index.php'>Volver a la página principal</a>";
          }

      }
    }

?>
