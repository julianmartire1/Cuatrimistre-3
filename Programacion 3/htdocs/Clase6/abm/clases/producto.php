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

	public static function TraerProductosBD()
	{
		try {

			$ListaDeProductosLeidos = array();

			/*$cB=$obj->codBarra;
			$n=$obj->nombre;
			$pF=$obj->pathFoto;*/
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

	public static function InsertarBD($obj)
	{
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

	public function BajaBD($nombre,$codBarra)
	{
		try {
			$pdo=new PDO("mysql:dbname=productos","root","");
			$band=$pdo->prepare("DELETE FROM `producto` WHERE nombre='$nombre' AND codigo_barra='$codBarra'");

			$band->execute();

			return $band;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}

	public function ModificarBD($cod,$nom,$path)
	{
		try {

			$pdo=new PDO("mysql:dbname=productos","root","");
			$band=$pdo->prepare("UPDATE `producto` SET `codigo_barra`='$cod',`nombre`='$nom',`path_foto`='$path' WHERE codigo_barra='$cod'");

			$band->execute();

			return $band;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}

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
//--------------------------------------------------------------------------------//
}
