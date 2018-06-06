<?php
include '../php/constantes.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?=CSS;?>/index.css">
    <script type="text/javascript" src="<?=JS;?>/registro.js"></script>
	<title>Standort</title>
</head>
<body>
    <form method="POST" action="../php/login.php">
        <p>Por favor logueate para acceder</p>
        <div>
            <label>Nombre de Usuario o correo</label><br>
            <div><input name="usuario" type="text" placeholder="Usuario" autofocus="" required></div>
        </div>

        <div>
            <label>Contraseña</label><br>
            <div><input name="pass" type="password" placeholder="Contraseña" required></div>
        </div>

        <div><button type="submit" name="bandera" value="entrar">Entrar</button></div><br>
        <p id="error"></p>
    </form>
    <div>
        <p><a href="registro.php">Registrarte</a></p>
    </div>
</body>
</html>
<?php include '../php/error.php' ?>