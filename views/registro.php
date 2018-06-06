<?php
include '../php/constantes.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?=CSS;?>/index.css">
    <script src="<?=JS;?>/registro.js"></script>
	<title>Standort</title>
    <meta charset="utf-8">
</head>
<body>
    <form enctype="multipart/form-data" method="POST" action="../php/registro.php" onsubmit="return validar()">
        <div>
            <div>
                <label>Usuario</label><br>
                <input name="usuario" id="usuario" placeholder="Nombre de usuario" type="text"/>
            </div>
            <div>
                <label class="label">Correo Electrónico</label><br>
                <input name="correo" id="correo" placeholder="Ingresa Correo" type="email">
            </div>
            <div>
                <label>Contraseña</label><br>
                <input name="pass" id="contraseña" minlength="8" placeholder="Contraseña (8 caracteres mínimo)" type="password"/>
            </div>
            <div>
                <label>Confirmar contraseña</label><br>
                <input name="pass2" id="contraseña2" minlength="8" placeholder="Confirma" type="password"/>
            </div>

            <div>
                <button type="submit" name="registrarse" value="reg">Registrarte</button><br>
                <a href="index.php">Iniciar sesión</a>
            </div>
        </div>
    </form>

    <p id="error"></p>
</body>
</html>
<?php include '../php/error.php'; ?>