<?php include '../php/constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TurismoQro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=CSS;?>/agregar.css">
	<script src="<?=JS;?>/agregar.js"></script>
</head>
<body>
	<img src="<?=IMG;?>/fondo2.jpg" class="fondo">
	<div class="fondo2"></div>

	<nav>
		<div onclick="cambio('main.php')" class="back">
			<img src="<?=IMG;?>/algo.jpg">
		</div>
		<h2>Menu Agregar</h2>
	</nav>

	<div class="contenedor">
		<div class="opciones">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Puntos de Interes</h1>
		</div>
		<div class="opciones">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Artesanias</h1>
		</div>
		<div class="opciones">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Dulces Tipicos</h1>
		</div>
		<div class="opciones">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Restaurantes</h1>
		</div>
		<div class="opciones">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Hospedaje</h1>
		</div>
	</div>

</body>
</html>