<?php 

if (isset($_POST['registrarse'])) {
        if (!isset($_POST['nombre']) || !isset($_POST['usuario']) || !isset($_POST['correo']) || !isset($_POST['pass']) || !isset($_POST['sexo']) || !isset($_POST['dia']) || !isset($_POST['mes']) || !isset($_POST['anio']))
                exit(header("location: ../views/registro.php?e=1"));
        
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $sexo = $_POST['sexo'];
        $d = $_POST['dia'];
        $m = $_POST['mes'];
        $a = $_POST['anio'];

        if (!$nombre || !$usuario || !$correo || !$pass || !$sexo || $d=='Día' || $m=='Mes' || $a=='Año')
            exit(header("location: ../views/registro.php?e=1"));

        $fecha=$a.'-'.$m.'-'.$d;
        if(if_exist($usuario,$correo))
            header("location: ../views/registro.php?e=2");
        else
            insert($nombre, $usuario, $correo, $pass,$sexo,$fecha,$val);
    }

function insert($n, $u, $co, $c,$s,$f,$i) {
    $c=md5($c);
    $query = "INSERT INTO usuario (nombre,usuario,correo,pass,sexo,fechaNac,idTipo) values('{$n}','{$u}','{$co}','{$c}','{$s}','{$f}',1)";
    //echo $query;
    $resultado = consulta($query);
    
    if ($resultado == 1) {
        if($i){
            $queryimg="SELECT MAX(idUsuario) as idUsuario FROM usuario";
            $res= consulta($queryimg);
            //echo $queryimg;
            while ($row = $res->fetch_assoc()) {
            $idUsuario=$row['idUsuario'];
            }
            imagenPerfil($idUsuario);
            header("location: ../views/registro.php?t=1");
        }else{
            header("location: ../views/registro.php?t=1");
    }
    exit;
    } else {
        header("location: ../views/registro.php?e=3");
        exit;
    }
}
function if_exist($u,$co){
    $query="SELECT count(*) as existe FROM usuario WHERE usuario='{$u}' OR correo='{$co}'";
    $res= consulta($query);
    while ($row = $res->fetch_assoc()) {
    $val=$row['existe'];
    }
    if($val>0){
        return True;
    }else{
        return False;
    }

}


function imagenPerfil($idUsuario){
    $nombre_img = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
     
    //Si la imagen no existe
    if ($nombre_img == NULL) 
        exit(header("location: ../views/registro.php?e=7"));

    //Si existe la variable pero se pasa del tamaño permitido
    if ($_FILES['imagen']['size'] >= 200000)
        exit(header("location: ../views/registro.php?e=4"));

    //Si la imagen no tiene el formato valido
    if (($tipo == "image/gif") || ($tipo == "image/jpeg") || ($tipo == "image/jpg") || ($tipo == "image/png")) 
        exit(header("location: ../views/registro.php?e=5"));

    // Ruta donde se guardarán las imágenes que subamos
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/cuimusic/cuimusic/files/perfil/';

    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
    move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$nombre_img);
    $query2 = "UPDATE usuario SET ruta_imagen = '$nombre_img' WHERE idUsuario={$idUsuario}";
    $resultado2 = consulta($query2);
    if ($resultado2 != 1)
        exit(header("location: ../views/registro.php?e=6"));
}
 ?>