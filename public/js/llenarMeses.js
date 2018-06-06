<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
echo "<option selected value='0'>Mes</option>";
for ($i=1; $i <13 ; $i++) { 
	echo "<option value='".$i."'>".$meses[$i-1]."</option>";
}
 ?>