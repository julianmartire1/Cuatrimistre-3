<?php

class Producto
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $codBarra;
 	private $nombre;
  	private $pathFoto;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetCodBarra()
	{
		return $this->codBarra;
	}
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetPathFoto()
	{
		return $this->pathFoto;
	}

	public function SetCodBarra($valor)
	{
		$this->codBarra = $valor;
	}
	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetPathFoto($valor)
	{
		$this->pathFoto = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($codBarra=NULL, $nombre=NULL, $pathFoto=NULL)
	{
		if($codBarra !== NULL && $nombre !== NULL && $pathFoto !== NULL){
			$this->codBarra = $codBarra;
			$this->nombre = $nombre;
			$this->pathFoto = $pathFoto;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING
  	public function ToString()
	{
	  	return $this->codBarra." - ".$this->nombre." - ".$this->pathFoto."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	public static function Guardar($obj)
	{
		$resultado = FALSE;

		//ABRO EL ARCHIVO
		$ar = fopen("archivos/productos.txt", "a");

		//ESCRIBO EN EL ARCHIVO
		$cant = fwrite($ar, $obj->ToString());

		if($cant > 0)
		{
			$resultado = TRUE;
		}
		//CIERRO EL ARCHIVO
		fclose($ar);

		return $resultado;
	}

	public static function TraerTodosLosProductos()
	{

		$ListaDeProductosLeidos = array();

		//leo todos los productos del archivo
		$archivo=fopen("archivos/productos.txt", "r");

		while(!feof($archivo))
		{
			$archAux = fgets($archivo);
			$productos = explode(" - ", $archAux);
			//http://www.w3schools.com/php/func_string_explode.asp
			$productos[0] = trim($productos[0]);
			if($productos[0] != ""){
				$ListaDeProductosLeidos[] = new Producto($productos[0], $productos[1],$productos[2]);
			}
		}
		fclose($archivo);

		return $ListaDeProductosLeidos;

	}

	public static function ProductoDB($obj)
	{
		try
    	{
			$pdo = new PDO("mysql:host=localhost;dbname=productos","root","");

			//$resultados = $pdo->query("SELECT * FROM cds");
			//$datos = $resultados->fetchAll();//RETORNA TODOS
			//$datos = $resultados->fetchAll(PDO::FETCH_ASSOC);//RETORNA UN ARRAY ASOCIATIVO
			//$datos = $resultados->fetch(PDO::FETCH_LAZY);//

			$auxCod = $obj->codBarra;
			$auxNom = $obj->nombre;
			$auxFoto = $obj->pathFoto;

			$consulta = $pdo->prepare("INSERT INTO `producto`(`codigo_barra`, `nombre`, `path_foto`) VALUES (:codigodebarra,:nombre,:path_foto)");
			$consulta->bindParam(":codigodebarra",$auxCod);
			$consulta->bindParam(":nombre",$auxNom);
			$consulta->bindParam(":path_foto",$auxFoto);

			return $consulta->execute();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function TraerTodosLosProductosDB()
	{
		try
		{
			$pdo = new PDO("mysql:host=localhost;dbname=productos","root","");
			$array = [];

			$consulta = $pdo->prepare("SELECT codigo_barra AS codBarra, nombre, path_foto AS pathFoto FROM producto");

			$consulta->execute();

			while($row = $consulta->fetch(PDO::FETCH_ASSOC))
			{
				$array[] = $row;
			}

			return $array;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

	}

	public static function EliminarFoto($nombre,$codBarra)
	{
		try
		{
			$pdo = new PDO("mysql:host=localhost;dbname=productos","root","");

			$resultados = $pdo->query("SELECT path_foto FROM `producto` WHERE nombre='$nombre' AND codigo_barra='$codBarra'");
			$datos = $resultados->fetch(PDO::FETCH_BOTH);

			if (unlink("archivos/".$datos["path_foto"]))
			{
				return true;
			}
			else
			{
				return false;
			}

		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function Eliminar($nombre,$codBarra)
	{
		try
		{
			$pdo = new PDO("mysql:host=localhost;dbname=productos","root","");

			if (Producto::EliminarFoto($nombre,$codBarra))
			{
				$consulta = $pdo->prepare("DELETE FROM `producto` WHERE nombre='$nombre' AND codigo_barra='$codBarra'");
				return $consulta->execute();
			}
			else
			{
				return false;
			}
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function Modificar($codigoNuevo,$nombreNuevo,$fotoNueva)
	{
		try
		{
			$destino = "archivos/" . $_FILES["fotoNueva"]["name"];
			$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);
			$path = $nombreNuevo . "." . $tipoArchivo;

			$pdo = new PDO("mysql:host=localhost;dbname=productos","root","");

			$datoViejo = $pdo->query("SELECT path_foto FROM `producto` WHERE codigo_barra='$codigoNuevo'");
			$datos = $datoViejo->fetch(PDO::FETCH_BOTH);

			$consulta = $pdo->prepare("UPDATE `producto` SET codigo_barra='$codigoNuevo', nombre='$nombreNuevo', path_foto='$path' WHERE codigo_barra='$codigoNuevo'");


			if ($consulta->execute())
			{
				if(unlink("archivos/".$datos["path_foto"]))
				{
					move_uploaded_file($_FILES["fotoNueva"]["tmp_name"],"archivos/" . $nombreNuevo . "." . $tipoArchivo);
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}

		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}
	}
/*

public static function InsertarBD($obj)
{//Juli
	try {
		$cB=$obj->codBarra;
		$n=$obj->nombre;
		$pF=$obj->pathFoto;
		$pdo=new PDO("mysql:dbname=productos","root","");
		$band=$pdo->prepare("INSERT INTO `producto`(`codigo_barra`, `nombre`, `path_foto`)
		VALUES (:codigo_barra,:nombre,:path_foto)");

		$band->bindParam(":codigo_barra",$cB);
		$band->bindParam(":nombre",$n);
		$band->bindParam(":path_foto",$pF);

		$band->execute();
		return true;
	} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
	}


}

*/
	/*
	public static function TraerProductosBD()
	{//Juli
		try {

			$ListaDeProductosLeidos = array();


			$pdo=new PDO("mysql:dbname=productos","root","");
			$band=$pdo->prepare("SELECT codigo_barra AS codBarra, nombre, path_foto AS pathFoto FROM producto");
 			$band->execute();

			while ($prod=$band->fetchObject("Producto")) {
				array_push($ListaDeProductosLeidos,$prod);
			}

			return $ListaDeProductosLeidos;
		} catch (PDOException $e) {
  			echo $e->getMessage();
				return false;
		}
	}
	*/
//--------------------------------------------------------------------------------//
}
