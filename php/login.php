<?php 
include('db.php');

$usuario = $_GET['usuario'];
$pass = $_GET['pass'];
login($usuario, $pass);        

function login($u, $p){
	$p = md5($p);
    $query = "SELECT * FROM usuario WHERE nombreUsuario='$u' AND password='$p' OR correo='$u' AND password='$p'";
    $resultado = consulta($query);
    $arreglo = array();
    while ($query = $resultado->fetch_object()) {
        array_push($arreglo, array(
            "id"=>$query->idUsuario,
            "nombre"=>$query->nombreUsuario,
            "correo"=>$query->correo,
            "contrasena"=>$query->password
        ));
    }
    //IMPRIMIR LA RESPUESTA EN JSON
    echo json_encode($arreglo);

}