

function validarLogin(usuario, password) {
	var valido;

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		if (this.responseText == "Ok")
    			valido = true;
    		else {
    			viewModal(this.responseText);
    			valido = false; 
    		}
    	}
  	};
  	xhttp.open("GET", "../php/error.php?u=" + usuario + "&p=" + password, true);
  	xhttp.send();

  	return valido;
}

function validarRegistro(u, c, p){
	validar();

	var valido;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		if (this.responseText == "Ok")
    			valido = true;
    		else {
    			viewModal(this.responseText);
    			valido = false; 
    		}
    	}
  	};
  	xhttp.open("GET", "../php/error.php?u="+u+"&c="+c+"&p="+p, true);
  	xhttp.send();

  	return valido;
}

function getIdVal(element){
	return document.getElementById(element).value;
}