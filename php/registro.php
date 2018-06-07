<?php 

<<<<<<< HEAD
    $usuario = $_GET['usr'];
    $correo = $_GET['mail'];
    $pass = $_GET['pass'];

	$conexion = new mysqli('localhost','root','','standort');

	$sql = "INSERT INTO usuario (correo, password, nombreUsuario) values('$correo','$pass','$usuario')";

	$conexion->query($sql) or die ('error \n'.mysql_error());

=======
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
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55
