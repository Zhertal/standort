<?php include '../php/constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TurismoQro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=CSS;?>/favoritos.css">
	<script src="<?=JS;?>/favoritos.js"></script>
</head>
<body>

	<img src="<?=IMG;?>/fondo2.jpg" class="fondo">
	<div class="fondo2"></div>

	<nav>
		<div onclick="cambio('main.php')" class="back">
			<img src="<?=IMG;?>/algo.jpg">
		</div>
		<h2>Menu Favoritos</h2>
	</nav>

	<div class="contenedor">
		<div class="opciones" id="Puntos de Interes" onclick="cambioB(this.id)">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Puntos de Interes</h1>
		</div>
		<div class="opciones" id="Artesanias" onclick="cambioB(this.id)">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Artesanias</h1>
		</div>
		<div class="opciones" id="Dulces Tipicos" onclick="cambioB(this.id)">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Dulces Tipicos</h1>
		</div>
		<div class="opciones" id="Restaurantes" onclick="cambioB(this.id)">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Restaurantes</h1>
		</div>
		<div class="opciones" id="Hospedaje" onclick="cambioB(this.id)">
			<img src="<?=IMGUSRS;?>/algo.jpg">
			<h1>Hospedaje</h1>
		</div>
	</div>

</body>
</html>