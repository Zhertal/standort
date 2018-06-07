//var reg=document.getElementById('registrar');
//reg.addEventListener('click',validar);
function validar() {
    //Limpiar el error
    document.getElementById("error").innerHTML = "";
    var error = document.getElementById('error');
    
    //Variables de contenido de elementos
    var expresion = /\w+@\w+\.+[a-z]/;
    var usuario = document.getElementById("usuario").value
    var correo = document.getElementById("correo").value
    var contraseña = document.getElementById("contraseña").value
    var contraseña2 = document.getElementById("contraseña2").value

    //Si alguno de los campos esta vacio  
    if (usuario == "" || correo == "" || contraseña == "" || contraseña2 == "") {
        document.getElementById('usuario').classList.add('is-danger');        
        document.getElementById('correo').classList.add('is-danger');
        document.getElementById('contraseña').classList.add('is-danger');
        document.getElementById('contraseña2').classList.add('is-danger');
        viewModal("Todos los campos son obligatorios.");
        return false;
    } else if (contraseña.length < 8) {
        //Si la contraseña es mas corta que 8 caracteres
        document.getElementById('contraseña').classList.add("is-danger");
        document.getElementById('contraseña2').classList.add("is-danger");
        viewModal("La contraseña debe de tener minimo 8 caracteres");
        return false;
    } else if (contraseña != contraseña2) {
        //Si las contraseñas no son iguales
        document.getElementById('contraseña').classList.add("is-danger");
        document.getElementById('contraseña2').classList.add("is-danger");
        viewModal("Las contraseñas no son iguales.");
        return false;
    }else if (!expresion.test(correos)) {
        //Si falta la @ en el correo
        document.getElementById('correo').classList.add("is-danger");
        viewModal("No es un correo valido. Recuerda usar @ y .example");
        return false;
    }
}

//Manejo de errores
function viewModal(texto) {
    if(texto != undefined)
        error.innerHTML = texto;
        error.classList.add("is-active");
        setTimeout(function() {
            error.classList.remove("is-active");
        }, 1300);
}

function registrar(){
    var usr = document.getElementById('usuario').value;
    var mail = document.getElementById('correo').value;
    var contra = document.getElementById('contraseña').value;

    ajax = new XMLHttpRequest();
    ajax.open('GET', 'http://localhost/standort/php/registro.php?usr='+usr+"&mail="+mail+"$pass="+contra);
    ajax.send();
    ajax.onreadystatechange = function(){
        if (ajax.readyState==4 && ajax.status == 200) {
            console.log(ajax.responseText);
            alert('Registro generado correctamente');
            cambio('../index.html')
        }
    }
}




function cambio(page){
    location.href = page;
}