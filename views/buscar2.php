<?php include '../php/constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TurismoQro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=CSS;?>/buscar2.css">
	<script src="<?=JS;?>/buscar2.js"></script>
</head>
<body onload="cargarDatos()">

	<img src="<?=IMG;?>/fondo2.jpg" class="fondo">
	<div class="fondo2"></div>

	<nav>
		<div onclick="cambio('buscar.php')" class="back">
			<img src="<?=IMG;?>/algo.jpg">
		</div>
		<h2 id="opcion"></h2>
	</nav>

	<div class="contenedor">
		<div class="buscador">
			<input type="text" name="" placeholder="¿Qué lugar desea buscar?">
		</div>

		<div class="lugar">
			<h2>Nombre lugar</h2>
			<h3>8.4</h3>
			<img src="" class="opcion">
			<img src="" class="opcion">
			<img src="" class="opcion">

		</div>
	</div>

</body>
</html>