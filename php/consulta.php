<?php

include('functions.php');

$id=$_GET["id"];
$consulta=$_GET["consult"];
$query = "";

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
}

if($resultset = getSQLResultSet($query)){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}

?>


