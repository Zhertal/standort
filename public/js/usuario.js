function cambio(page){
	location.href = page;
}

function cambioB(id){
	localStorage.setItem("opciones", id);
	location.href = "buscar2.html";
}

function logout(){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		console.log(this.responseText);
    	}
  	};
  	xhttp.open("GET", "../php/logout.php", true);
  	xhttp.send();

	location.href = "index.html";
}