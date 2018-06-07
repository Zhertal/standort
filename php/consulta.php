<?php

include('functions.php');

$id=$_GET["id"];
$consulta=$_GET["consult"];
$query = "";

<<<<<<< HEAD
if($consulta="categoria"){
	$query = "SELECT * FROM `idCategoria` WHERE id='$id'";
}elseif ($consulta="comentarios") {
	$query = "SELECT * FROM `idComentario` WHERE id='$id'";
}elseif ($consulta="sitio") {
	$query = "SELECT * FROM `idSitio` WHERE id='$id'";
}elseif ($consulta="sitiocategoria") {
	$query = "SELECT * FROM `idSitioCategoria` WHERE id='$id'";
}elseif ($consulta="usuario") {
	$query = "SELECT * FROM `idUsuario` WHERE id='$id'";
=======
if($consulta=="categoria"){
	$query = "SELECT * FROM `idCategoria` WHERE id='$id'";
}elseif ($consulta=="comentarios") {
	$query = "SELECT * FROM `idComentario` WHERE id='$id'";
}elseif ($consulta=="sitio") {
	$query = "SELECT * FROM `idSitio` WHERE id='$id'";
}elseif ($consulta=="sitiocategoria") {
	$query = "SELECT * FROM `idSitioCategoria` WHERE id='$id'";
}elseif ($consulta=="usuario") {
	$query = "SELECT * FROM `usuario` WHERE idUsuario='$id'";
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55
}

if($resultset = getSQLResultSet($query)){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}
?>


