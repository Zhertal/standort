function cambio(page){
	location.href = page;
}

function cambioB(id){
	localStorage.setItem("opciones", id);
	location.href = "favoritos2.html";
}