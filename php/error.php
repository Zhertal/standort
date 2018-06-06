<?php 
if (isset($_GET['e'])){
	switch ($_GET['e']) {
		case 1:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal()";
			echo "</script>";
			break;
		case 2:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('Ese nombre de usuario o correo ya esta en uso')";
			echo "</script>";
			break;
		case 3:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('Error al registrar usuario')";
			echo "</script>";
			break;
		case 4:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('La imagen es muy grande no se subio correctamente, Usuario registrado')";
			echo "</script>";
			break;
		case 5:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('La imagen debe ser formato: jpg, jpeg, png, gif. Usuario registrado ')";
			echo "</script>";
			break;
		case 6:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('La imagen no se subio correctamente, Usuario registrado')";
			echo "</script>";
			break;
		case 7:
			echo "<script language='javascript' type='text/javascript'>";
			echo "viewModal('No se selecciono una imagen. Usuario registrado')";
			echo "</script>";
			break;
		default: break;
	}   
}

if (isset($_GET['t'])){
	if ($_GET['t'] == 1){
    	echo "<script language='javascript' type='text/javascript'>";
		echo "viewModal('Usuario Creado Exitosamente')";
		echo "</script>";
    }
}
 ?>