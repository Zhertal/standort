function cambio(page){
	location.href = page;
}

function cargarDatos(){
	var opcion = localStorage.getItem('opciones');
	document.getElementById('opcion').innerHTML = opcion;
}