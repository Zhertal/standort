<?php 
include ('functions.php');

$email=$_GET['correo'];
$pass=$_GET['pass'];
$nombre=$_GET['usr'];
$fecha=$_GET['fecha'];

ejecutarSQLCommand("INSERT INTO  `usuario` (correo, password, nombreUsuario, fechaRegistro)
VALUES (
'$email',
'$pass',
'$nombre',
'$fecha')

 ON DUPLICATE KEY UPDATE `correo`= '$email',
`password`='$pas',
`nombreUsuario`='$nombre',
`fechaRegistro`='$fecha';");
 ?>