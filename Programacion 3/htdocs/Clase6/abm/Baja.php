<html>
<head>
	<title>BAJA de PRODUCTOS</title>

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
				<input type="text" name="codBarra" placeholder="Ingrese c&oacute;digo de barras a eliminar"  />
				<input type="text" name="nombre" placeholder="Ingrese nombre"  />

				<input type="submit" class="MiBotonUTN" name="Eliminar" />
			</form>

		</div>
	</div>
</body>
</html>
