//var reg=document.getElementById('registrar');
//reg.addEventListener('click',validar);

function validar() {
    //Limpiar el error
    document.getElementById("error").innerHTML = "";
    var error = document.getElementById('error');
    
    //Variables de contenido de elementos
    var expresion = /\w+@\w+\.+[a-z]/;
    var nombre = document.getElementById("nombre").value
    var usuario = document.getElementById("usuario").value
    var correo = document.getElementById("correo").value
    var contraseña = document.getElementById("contraseña").value
    var contraseña2 = document.getElementById("contraseña2").value
    var sexo = document.getElementById("sexo").value;
    
    //Variables de fecha
    var d = document.getElementById("dia").value;
    d = parseInt(d);
    var m = document.getElementById("mes").value;
    m = parseInt(m);
    var a = document.getElementById("año").value;
    if (d < 10) d = "0" + d;
    if (m < 10) m = "0" + m;
    if (a < 10) a = "0" + a;
    var fecha = a + "-" + m + "-" + d;

    //Si alguno de los campos esta vacio  
    if (nombre == "" || usuario == "" || correo == "" || contraseña == "" || contraseña2 || sexo == "" || a == "00" || m == "00" || d == "00") {
        viewModal("Todos los campos son obligatorios.");
        return false;
    } else if (contraseña.length < 8) {
        //Si la contraseña es mas corta que 8 caracteres
        document.getElementById('contraseña').classList.add("is-danger");
        document.getElementById('contraseña2').classList.add("is-danger");
        viewModal("La contraseña debe de tener minimo 8 caracteres");
        return false;
    } else if (!expresion.test(correos)) {
        document.getElementById('correo').classList.add("is-danger");
        viewModal("No es un correo valido. Recuerda usar @ y .example");
        return false;
    } else {
        return true;
    }
}

//Poner los dias en el documento
window.onload = function() {
    var select = document.getElementById('mes');
    select.addEventListener('change', function() {
    var selectedOption = this.options[select.selectedIndex];
    r(selectedOption.value);
});
}

function r(a) {
    var y = document.getElementById("dia").length;
    var mes_nacimiento = document.getElementById("mes").value;
    var dia_nacimiento = document.getElementById("dia").value;
    //El mes tiene 30 dias
    if (a == 4 || a == 6 || a == 9 || a == 11) {
        var dia = document.getElementById("dia");
        if (dia_nacimiento > 30)
            dia.selectedIndex = "30";
        dia.remove(31);
    }
    //El mes tiene 31 dias
    if (y != 32 && y != 29) {
        var opt = document.createElement("option");
        var dia = document.getElementById("dia");
        opt.text = "31";
        opt.value = "31";
        dia.add(opt)
    }
    //Si el mes tiene 30 dias
    if (y == 29) {
        for (var i = 29; i <= 31; i++) {
            dia = document.getElementById("dia");
            var opt = document.createElement("option");
            opt.text = i.toString();
            opt.value = i;
            dia.add(opt);
        }
    }
    //Si el mes tiene 28 dias
    if (a == 2) {
        var dia = document.getElementById("dia");
        if (dia_nacimiento > 28)
            dia.selectedIndex = "28";
        dia.remove(31)
        dia.remove(30)
        dia.remove(29)
    }
}
function viewModal(texto) {
    if(val == !undefined)
        error.innerHTML = texto;
        error.classList.add("is-active");
        setTimeout(function() {
            error.classList.remove("is-active");
        }, 1300);
}