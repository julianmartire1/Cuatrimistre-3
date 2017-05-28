<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pagina1</title>
  </head>
  <body>
      <form method="post">
          <input type="password" name="Pass" placeholder="Contraseña">
          <input type="mail" name="mail" value="<?php if(isset($_COOKIE['mail'])){echo $_COOKIE['mail'];} ?>"placeholder="email">
          <input type="checkbox" name="cookie" value="Recordar mail del usuario">
          <input type="submit" name="logear" value="Logear">
          <input type="submit" name="registrarse" value="Registrarse">
      </form>
  </body>
</html>

<?php

    $verificar = isset($_POST["logear"]) ? TRUE : FALSE;
    $band=0;

    if(isset($_POST["registrarse"]))
        header("Location:UsuarioCarga.php");

    if($verificar)
    {
        $ar = "usuarios.txt";
        if(file_exists($ar))
        {
            $file = fopen($ar,'r');
            while(!feof($file))
            {
                $lineas=fgets($file);
                $usuario=explode("-",$lineas);
                $usuario[0]=trim($usuario[0]);
                if($usuario[0] != "")
                {
                    if(strncmp($usuario[1],$_POST["Pass"],strlen($usuario[1]))==0 && strncmp($usuario[2],$_POST["mail"],strlen($usuario[2]))==0)
                    {
                        session_start();
                        $_SESSION['mail']=$_POST["mail"];
                        $band=1;

                        if(isset($_POST["cookie"]))
                        {
                            setcookie("mail",$_POST['mail'],time()+30);
                        }

                        header("Location:Listado.php");
                    }
                }
            }
            if($band){}
            else
                echo "La contraseña y/o mail no coincide/n";
        }
        fclose($file);
    }

?>
