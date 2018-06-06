<?php
include '../php/constantes.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?=CSS;?>/index.css">
<head>
	<title>Standort</title>
</head>
<body>
    <form method="POST" action="../php/login.php">
        <p>Por favor logueate para acceder</p>
        <div>
            <label>Nombre de Usuario o correo</label>
            <div><input name="usuario" type="text" placeholder="Usuario" autofocus="" required></div>
        </div>

        <div>
            <label>Contraseña</label>
            <div><input name="pass" type="password" placeholder="Contraseña" required></div>
        </div>

        <div><button type="submit" name="bandera" value="entrar">Entrar</button></div>
    </form>
    <div>
        <p><a href="registro.php">Registrarte</a></p>
    </div>

    <p id="error"></p>
</body>
</html>
<?php include '../php/error.php' ?>