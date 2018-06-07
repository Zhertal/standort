<?php 

    $usuario = $_GET['usr'];
    $correo = $_GET['mail'];
    $pass = $_GET['pass'];

	$conexion = new mysqli('localhost','root','','standort');

	$sql = "INSERT INTO usuario (correo, password, nombreUsuario) values('$correo','$pass','$usuario')";

	$conexion->query($sql) or die ('error \n'.mysql_error());

