<?php 

include ('functions.php');

function insertUser(){
$email=$_GET['correo'];
$pass=$_GET['password'];
$nombre=$_GET['nombreUsuario'];
$kudos=$_GET['kudos'];
$fecha=$_GET['fechaRegistro'];

ejecutarSQLCommand("INSERT INTO  `usuario` (correo, password, nombreUsuario, kudos, fechaRegistro)
VALUES (
'$email',
'$pass',
'$nombre',
'$Ponderacion',
'$fecha')

 ON DUPLICATE KEY UPDATE `correo`= '$email',
`password`='$pas',
`nombreUsuario`='$nombre',
`kudos`='$kudos',
`fechaRegistro`='$fecha';");
}


function insertSitio(){
$idUser=$_GET['idUsuario'];
$sitio=$_GET['nombreSitio'];
$long=$_GET['longitud'];
$lati=$_GET['latitud'];
$kudos=$_GET['kudos'];
$descri=$_GET['descripcion'];

ejecutarSQLCommand("INSERT INTO  `sitio` (idUsuario, nombreSitio, longitud, latitud, kudos, descripcion)
VALUES (
'$idUser',
'$sitio',
'$long',
'$lati',
'$kudos',
'$desri')

 ON DUPLICATE KEY UPDATE `idUsuario`= '$idUser',
`nombreSitio`='$sitio',
`longitud`='$long',
`latitud`='$lati',
`kudos`='$kudos',
`descripcion`='$descri';");
}

function insertComentario(){
$idUser=$_GET['idUsuario'];
$idSitio=$_GET['idSitio'];
$comnt=$_GET['comentario'];
$fecha=$_GET['fecha'];
$kudos=$_GET['kudos'];

ejecutarSQLCommand("INSERT INTO  `comentarios` (idUsuario, idSitio, comentario, fecha, kudos)
VALUES (
'$idUser',
'$idSitio',
'$comnt',
'$fecha',
'$kudos')

 ON DUPLICATE KEY UPDATE `idUsuario`= '$idUser',
`idSitio`='$idSitio',
`comentario`='$comnt',
`fecha`='$fecha',
`kudos`='$kudos';");
}

 ?>