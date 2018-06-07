/*Window.onload = inicializar;

function inicializar(){
	verMapa();
}

function verMapa(){
	navigator.geolocation.getCurrentPosition(lugar)
}

function lugar(coordenadas){
	longitud = coordenadas.coords.longitude;
	latitud = coordenadas.coords.latitude;
	console.log(longitud, latitud);
	initMap();
}

function lugar(coordenadas){
	var longitud = coordenadas.coords.longitude;
	var latitud = coordenadas.coords.latitude;
	console.log(longitud, latitud);
	initMap();
}*/

function cambio(page){
	location.href = page;
}
