<?php 
include ('functions.php');

$idUser=$_GET['usr'];
$sitio=$_GET['nomb'];
$long=$_GET['long'];
$lati=$_GET['lat'];
$descri=$_GET['desc'];
$cat=$_GET['cat'];

ejecutarSQLCommand("INSERT INTO  `sitio` (idUsuario, nombreSitio, longitud, latitud, descripcion, categoria)
VALUES (
'$idUser',
'$sitio',
'$long',
'$lati',
'$desri',
'$cat')

 ON DUPLICATE KEY UPDATE `idUsuario`= '$idUser',
`nombreSitio`='$sitio',
`longitud`='$long',
`latitud`='$lati',
`descripcion`='$descri',
`categoria`='$cat';");
 ?>