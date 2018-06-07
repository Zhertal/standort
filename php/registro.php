<?php 
include ('functions.php');

$email=$_POST['correo'];
$pass=$_POST['pass'];
$nombre=$_POST['usuario'];

ejecutarSQLCommand("INSERT INTO  `usuario` (correo, password, nombreUsuario)
VALUES (
'$email',
'$pass',
'$nombre')

 ON DUPLICATE KEY UPDATE `correo`= '$email',
`password`='$pass',
`nombreUsuario`='$nombre';");

header('location: ../views/index.html')
 ?>