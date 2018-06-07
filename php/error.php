<?php 
include 'db.php';
//____________________________Errores en el registro___________________________________
if (isset($_GET['u']) && isset($_GET['c']) && isset($_GET['p'])) {
	$u = $_GET['u'];//usuario
	$c = $_GET['c'];//correo
	$p = $_GET['p'];//password

	//Si el usuario ya existe
	$q = "SELECT count(*) as existe FROM usuario WHERE nombreUsuario='{$u}' OR correo='{$u}'";
    $res = consulta($q);
    while ($row = $res->fetch_assoc())
        $val = $row['existe'];
    if($val>0)
        exit("El nombre de usaurio o correo ya existe.");

    //Si algun valor esta vacio
    if (!isset($_GET['u']) || !isset($_GET['c']) || !isset($_GET['p']))
        exit("Todos los campos son obligatorios.");

    //El registro es correcto
    exit("Ok");
//______________________________Errores en el login___________________________________
} else if (isset($_GET['u']) && isset($_GET['p'])) {
	$u = $_GET['u'];//usuario
	$p = $_GET['p'];//password

	//Si el usuario no existe
	$q = "SELECT count(*) as existe FROM usuario WHERE nombreUsuario='{$u}' OR correo='{$u}'";
    $res = consulta($q);
    while ($row = $res->fetch_assoc())
        $val = $row['existe'];
    if($val<=0)
        exit("Usuario inexistente.");

    //Si algun valor esta vacio
    if (!isset($_GET['u']) || !isset($_GET['p']))
        exit("Todos los campos son obligatorios.");

    //Si no coinciden las credenciales
    $p = md5($p);
    $q = "SELECT * FROM usuario WHERE nombreUsuario='{$u}' AND password='{$p}' OR correo='{$u}' AND password='{$p}'";
    $resultado = consulta($q);
    if ($resultado->num_rows == 0)
        exit("Usuario o contraseña incorrecto.");

    //El login es correcto
    exit("Ok");
}
 ?>