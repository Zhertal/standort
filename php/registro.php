<?php 
include 'db.php';

if (isset($_POST['registrarse'])) {

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
        
    insert($usuario, $correo, $pass);
}

function insert($u, $co, $c) {
    $c = md5($c);//Encriptar
    $query = "INSERT INTO usuario (correo, password, nombreUsuario) values('{$co}','{$c}','{$u}')";
    $resultado = consulta($query);
    exit(header("location: ../views/index.html"));
}
 ?>