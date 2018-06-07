<?php 
include('db.php');

<<<<<<< HEAD
$usuario = $_GET['usuario'];
$pass = $_GET['pass'];
=======
//Salir si no hay POST
if(!$_POST)
	exit(header("location: ../views/registro.html"));

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55
login($usuario, $pass);        

function login($u, $p){
	$p = md5($p);
    $query = "SELECT * FROM usuario WHERE nombreUsuario='$u' AND password='$p' OR correo='$u' AND password='$p'";
    $resultado = consulta($query);
<<<<<<< HEAD
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
=======
    session_start();
    while ($r = mysqli_fetch_array($resultado)) {
        $_SESSION['id'] = $r['idUsuario'];
        $_SESSION['usuario'] = $r['nombreUsuario'];
    }
    exit(header("location: ../views/main.html"));
}
 ?>
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55
