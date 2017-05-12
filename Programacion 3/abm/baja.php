<html>
<head>
	<title>ALTA de PRODUCTOS</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>
<?php     
	require_once("clases\producto.php");
?>
	<div class="container">
	
		<div class="page-header">
			<h1>PRODUCTOS</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>BAJA-LISTADO - con archivos -</h1>

			<form id="FormIngreso" method="post" enctype="multipart/form-data" action="administracion.php" >
				<input type="text" name="codBarraBaja" placeholder="Ingrese c&oacute;digo de barras del producto a eliminar"  />
				<input type="text" name="nombreBaja" placeholder="Ingrese nombre del producto a eliminar"  />
				<input type="submit" class="MiBotonUTN" name="Borrar" />
			</form>
		
		</div>
	</div>
</body>
</html>