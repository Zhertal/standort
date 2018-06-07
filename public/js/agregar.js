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

function guardarLugar(){
    var nomb = document.getElementById('nombre').value;
    var cat = document.getElementById('categoria').value;
    var des = document.getElementById('descripcion').value;
    
    var usr = localStorage.getItem('idUsuario');
    var lat = sessionStorage.getItem('latitud');
    var long = sessionStorage.getItem('longitud');

    ajax = new XMLHttpRequest();
    ajax.open('GET', 'http://localStoragehost/standort/php/agregar.php?usr='+usr+'&nomb='+nomb+"&long="+long+"&lat="+lat+"&desc="+des+"&cat="+cat);
    ajax.send();
    ajax.onreadystatechange = function(){
        if (ajax.readyState==4 && ajax.status == 200) {
            console.log(ajax.responseText);
            alert('Se a agregado el lugar de manera correcta');
            cambio('../views/main.html');
        }
    }
}
