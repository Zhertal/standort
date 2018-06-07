<?php 
include('db.php');


$usuario = $_GET['usuario'];
$pass = $_GET['pass'];

//Salir si no hay POST
if(!$_POST)
	exit(header("location: ../views/registro.html"));

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

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

    session_start();
    while ($r = mysqli_fetch_array($resultado)) {
        $_SESSION['id'] = $r['idUsuario'];
        $_SESSION['usuario'] = $r['nombreUsuario'];
    }
    exit(header("location: ../views/main.html"));
}
 ?>

