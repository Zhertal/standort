<<<<<<< HEAD
window.addEventListener('load',inicializar, true);
=======
/*Window.onload = inicializar;
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55

function inicializar(){
	verMapa();
}

function verMapa(){
<<<<<<< HEAD
	navigator.geolocation.getCurrentPosition(lugar)
}

function lugar(coordenadas){
	longitud = coordenadas.coords.longitude;
	latitud = coordenadas.coords.latitude;
	console.log(longitud, latitud);
	initMap();
}





=======
	navigator.geolocation.getCurrentPosition(lugar);
}

function lugar(coordenadas){
	var longitud = coordenadas.coords.longitude;
	var latitud = coordenadas.coords.latitude;
	console.log(longitud, latitud);
	initMap();
}*/
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55

function cambio(page){
	location.href = page;
}
