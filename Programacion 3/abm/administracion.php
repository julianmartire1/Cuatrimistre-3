<?php

require_once ("clases/producto.php");

$alta = isset($_POST["guardar"]) ? TRUE : FALSE;

if($alta)
{
	if(!empty($_POST["codBarra"]) && !empty($_POST["nombre"]) && !empty($_FILES["archivo"]["name"]))
	{	
		//INDICO CUAL SERA EL DESTINO DEL ARCHIVO SUBIDO
		$destino = "archivos/" . $_FILES["archivo"]["name"];

		$uploadOk = TRUE;

		$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

		//VERIFICO QUE EL ARCHIVO NO EXISTA
		if (file_exists($destino)) 
		{
			$uploadOk = FALSE;
			$mensaje = "El archivo ya existe. Verifique!!!";
			include("mensaje.php");
		}
		//VERIFICO EL TAMA�O MAXIMO QUE PERMITO SUBIR
		if ($_FILES["archivo"]["size"] > 3000000) 
		{
			$uploadOk = FALSE;
			$mensaje = "El archivo es demasiado grande. Verifique!!!";
			include("mensaje.php");
		}

		//OBTIENE EL TAMA�O DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
		//IMAGEN, RETORNA FALSE
		$esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);

		if($esImagen === FALSE) 
		{//NO ES UNA IMAGEN
			$uploadOk = FALSE;
			$mensaje = "S&oacute;lo son permitidas IMAGENES.";
			include("mensaje.php");
		}
		else 
		{// ES UNA IMAGEN

			//SOLO PERMITO CIERTAS EXTENSIONES
			if($tipoArchivo != "jpg" && $tipoArchivo != "jpeg" && $tipoArchivo != "gif"	&& $tipoArchivo != "png") 
			{
				$uploadOk = FALSE;
				$mensaje = "S&oacute;lo son permitidas imagenes con extensi&oacute;n JPG, JPEG, PNG o GIF.";
				include("mensaje.php");
			}
		}

		//VERIFICO SI HUBO ALGUN ERROR, CHEQUEANDO $uploadOk
		if ($uploadOk === FALSE)
		{
			echo "<br/><br/>NO SE PUDO SUBIR EL ARCHIVO.";
		} 
		else 
		{
			$destinoNuevo = "archivos/" . $_POST["nombre"] .".". $tipoArchivo;

			//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
				if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) 
				{
					rename($destino,$destinoNuevo);
					$p = new Producto($_POST["codBarra"],$_POST["nombre"],$_POST["nombre"].".".$tipoArchivo);
					
					if(!Producto::ProductoDB($p))
					{
						$mensaje = "El producto ya existe o hubo un error al crear el producto";
						include("mensaje.php");
					}
					else
					{
						$mensaje = "PRODUCTO agregado CORRECTAMENTE!!!";
						include("mensaje.php");
					}
				} 
				else 
				{
					$mensaje = "Lamentablemente ocurri&oacute; un error y no se pudo agregar el producto";
					include("mensaje.php");
				}
		}
	}
	else
	{
		$mensaje = "Los campos no fueron correctamente completados";
		include("mensaje.php");
	}	
}//if $alta

if(isset($_POST["Borrar"]))
{	
	if(!empty($_POST["nombreBaja"]) && !empty($_POST["codBarraBaja"]))
	{
		if (Producto::Eliminar($_POST["nombreBaja"],$_POST["codBarraBaja"]))
		{
			$mensaje = "Producto correctamente eliminado!!";
			include("mensaje.php");
		} 
		else 
		{
			$mensaje = "El producto no existe o hubo un error al borrar el producto";
			include("mensaje.php");
		}
	}
	else
	{
		$mensaje = "Los campos no fueron correctamente completados";
		include("mensaje.php");
	}
	
}//if borrar

if(isset($_POST["Modificar"]))
{
	if(!empty($_POST["codBarraModificado"]) && !empty($_POST["nombreModificado"]) && !empty($_FILES["fotoNueva"]["name"]))
	{
		$destino = "archivos/" . $_FILES["fotoNueva"]["name"];

		$uploadOk = TRUE;

		$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

		//VERIFICO QUE EL ARCHIVO NO EXISTA
		if (file_exists($destino)) 
		{
			$uploadOk = FALSE;
			$mensaje = "El archivo ya existe. Verifique!!!";
			include("mensaje.php");
		}
		//VERIFICO EL TAMA�O MAXIMO QUE PERMITO SUBIR
		if ($_FILES["fotoNueva"]["size"] > 3000000) 
		{
			$uploadOk = FALSE;
			$mensaje = "El archivo es demasiado grande. Verifique!!!";
			include("mensaje.php");
		}

		//OBTIENE EL TAMA�O DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
		//IMAGEN, RETORNA FALSE
		$esImagen = getimagesize($_FILES["fotoNueva"]["tmp_name"]);

		if($esImagen === FALSE) 
		{//NO ES UNA IMAGEN
			$uploadOk = FALSE;
			$mensaje = "S&oacute;lo son permitidas IMAGENES.";
			include("mensaje.php");
		}
		else 
		{// ES UNA IMAGEN

			//SOLO PERMITO CIERTAS EXTENSIONES
			if($tipoArchivo != "jpg" && $tipoArchivo != "jpeg" && $tipoArchivo != "gif"	&& $tipoArchivo != "png") 
			{
				$uploadOk = FALSE;
				$mensaje = "S&oacute;lo son permitidas imagenes con extensi&oacute;n JPG, JPEG, PNG o GIF.";
				include("mensaje.php");
			}
		}

		//VERIFICO SI HUBO ALGUN ERROR, CHEQUEANDO $uploadOk
		if ($uploadOk === FALSE)
		{
			echo "<br/><br/>NO SE PUDO SUBIR EL ARCHIVO.";
		} 
		else
		{
			if(Producto::Modificar($_POST["codBarraModificado"],$_POST["nombreModificado"],$_FILES["fotoNueva"]["name"]))
			{
				$mensaje = "Producto correctamente modificado!!";
				include("mensaje.php");
			} 
			else 
			{
				$mensaje = "El producto no existe o hubo un error al modificar el producto";
				include("mensaje.php");
			}
		}
	}
	else
	{
		$mensaje = "Los campos no fueron correctamente completados";
		include("mensaje.php");
	}
}//if modificar
?>