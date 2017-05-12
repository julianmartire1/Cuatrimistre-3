<!doctype html>
<html>
<head>
	<title>Ejemplos Pr&aacute;tico con AJAX</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/animacion.css">		
		
		<!-- Estilos propios -->
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">

        <!-- jQuery library -->
		<script type="text/javascript" src="../js/jquery.js"></script>

		<!-- Funciones Propias -->		
		<script type="text/javascript" >
			
			function Suggestion(cadena){
			
				if (cadena.length == 0) { 
					document.getElementById("divNombresSugeridos").innerHTML = "";
					return;
				}
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var sugerencias = xmlhttp.responseText;
						sugerencias = sugerencias == "" ? "Sin Sugerencias..." : sugerencias;
						document.getElementById("divNombresSugeridos").innerHTML = sugerencias;
					}
				}
				
				xmlhttp.open("POST", "obtenerSugerencia.php", true);
				xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
				xmlhttp.send("palabra="+cadena);
				
			}
		</script>
</head>
<body>
		<a href="../index.html"  class="btn btn-info">Volver al Inicio</a>
		<div class="container">
		<div class="page-header">
			<div class="CajaInicio animated bounceInRight">
				<h1>Ingrese su nombre</h1>
				<input type="text" id="txtNombre" style="width:100%;font-size:30px" onkeyup="Suggestion(this.value)" />
			</div>
				  
			<div class="CajaInicio animated bounceInRight">
				<h1>NOMBRES SUGERIDOS</h1>
				<div id="divNombresSugeridos" style="font-size:50px"></div>
			</div>
			
		</div>
		
	</div>
</body>
</html>