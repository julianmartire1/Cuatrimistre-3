<?php
	require_once('clases/producto.php');
?>
<!doctype html>
<html>
<head>
	<title>Ejemplo de ALTA-LISTADO - con archivos -</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<a class="btn btn-info" href="index.html">Menú principal</a>

	<div class="container">
		<div class="page-header">
			<h1>Ejemplos de Grilla</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de PRODUCTOS</h1>

<?php 

$ArrayDeProductos = Producto::TraerTodosLosProductos();

if(count($ArrayDeProductos) > 0){
	
	echo "<table class='table'>
			<thead>
				<tr>
					<th>  COD. BARRA </th>
					<th>  NOMBRE     </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDeProductos as $prod){

			echo " 	<tr>
						<td>".$prod->GetCodBarra()."</td>
						<td>".$prod->GetNombre()."</td>
					</tr>";
		}	
	echo "</table>";
}
else{
	echo "No hay productos...";
}	
?>
		</div>
	</div>
</body>
</html>