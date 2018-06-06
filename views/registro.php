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
                <label>Nombre</label>
                <input class="input" id="nombre" placeholder="Nombre Completo" type="text" name="nombre"/>
            </div>
            <div>
                <label>Usuario</label>
                <input name="usuario" id="usuario" placeholder="Nombre de usuario" type="text"/>
            </div>
            <div>
                <label class="label">Correo Electrónico</label>
                <input name="correo" id="correo" placeholder="Ingresa Correo" type="email">
            </div>
            <div>
                <label>Contraseña</label>
                <input name="pass" id="contraseña" minlength="8" placeholder="Contraseña (8 caracteres mínimo)" type="password"/>
            </div>
            <div>
                <label>Confirmar contraseña</label>
                <input name="pass2" id="contraseña2" minlength="8" placeholder="Confirma" type="password"/>
            </div>
            <div>
                <label class="label">Sexo</label>
                <select id="sexo" name="sexo">
                    <option selected="M" value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>

            <div>
                <label class="label">Fecha de Nacimiento</label>
                <select id="dia" required="" name="dia">
                    <?php include '../php/llenarDias.php'; ?>
                </select>
                <select id="mes" name="mes" required="">
                    <?php include '../php/llenarMeses.php'; ?>
                </select>
                <select id="año" name="anio" required="">
                    <?php include '../php/llenarAnios.php'; ?>
                </select>
            </div>
            <div class="control">
                <button type="submit" name="registrarse" value="reg">Registrarte</button>
                <a href="index.php">Iniciar sesión</a>
            </div>
        </div>
    </form>

    <p id="error"></p>
</body>
</html>
<?php include '../php/error.php'; ?>