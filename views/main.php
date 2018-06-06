<?php include '../php/constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TurismoQro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=CSS;?>/index.css">
	<script src="<?=JS?>/index.js"></script>
	<meta name="viewport">
</head>
<body>
	<div class="contenedor">
		<img src="<?=IMG;?>/fondo2.jpg" class="fondo">
		<div class="fondo2"></div>

		<nav>
			<img src="<?=IMG;?>/user.png" alt="" onclick="alerta()">
			<h2>Imagen y nombre de usuario</h2>
		</nav>

		<div class="izq">
			<div class="cont-izq" onclick="cambio('buscar.php')">
				<h1>Buscar</h1>
			</div>
			<div class="cont-izq" onclick="cambio('recomendados.php')">
				<h1>Recomendados</h1>
			</div>
		</div>
		<div class="der">
			<div class="cont-der" onclick="cambio('favoritos.php')">
				<h1>Favoritos</h1>
			</div>
			<div class="cont-der">
				<h1>Agregar</h1>
			</div>
		</div>
	</div>

</body>

<script type="text/javascript">
	function alerta(){
		alert("En proceso");
	}
</script>
</html>