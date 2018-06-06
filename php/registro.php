<?php 
include 'db.php';

if (isset($_POST['registrarse'])) {
        if (!isset($_POST['usuario']) || !isset($_POST['correo']) || !isset($_POST['pass']))
            exit(header("location: ../views/registro.php?e=1"));
        
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        if (!$usuario || !$correo || !$pass)
            exit(header("location: ../views/registro.php?e=1"));
        
        insert($usuario, $correo, $pass);
    }

function insert($u, $co, $c) {
    if (userExist($u, $co))
        exit(header("location: ../views/registro.php?e=2"));

    $c = md5($c);//Encriptar
    $query = "INSERT INTO usuario (correo, password, nombreUsuario) values('{$co}','{$c}','{$u}')";
    $resultado = consulta($query);
    exit(header("location: ../views/index.php"));
}

function userExist($u,$co){
    $query = "SELECT count(*) as existe FROM usuario WHERE nombreUsuario='{$u}' OR correo='{$co}'";
    $res = consulta($query);
    while ($row = $res->fetch_assoc())
        $val = $row['existe'];
    if($val>0)
        return True;
    else
        return False;
}
 ?>