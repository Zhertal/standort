<?php include '../php/constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TurismoQro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=CSS;?>/recomendados2.css">
	<script src="<?=JS;?>/recomendados2.js"></script>
</head>
<body onload="cargarDatos()">

	<img src="<?=IMG;?>/fondo2.jpg" class="fondo">
	<div class="fondo2"></div>

	<nav>
		<div onclick="cambio('recomendados.php')" class="back">
			<img src="<?=IMG;?>/algo.jpg">
		</div>
		<h2 id="opcion"></h2>
	</nav>

	<div class="contenedor">
		<div class="lugar">
			<h2>Nombre lugar</h2>
			<h3>8.4</h3>
			<div class="opcion">
				<h3>Comentar</h3>
			</div>
			<div class="opcion">
				<h3>fav</h3>
			</div>
			<div class="opcion">
				<h3>Ver mas</h3>
			</div>
		</div>
	</div>

</body>
</html>