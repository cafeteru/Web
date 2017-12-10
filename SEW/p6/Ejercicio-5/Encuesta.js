"use strict";

class Formulario {
    constructor() {
        this.nombre = "";
        this.apellidos = "";
        this.edad = "";
        this.genero = "";
        this.email = "";
        this.utilidad = "";
        this.eficencia = "";
        this.usabilidad = "";
        this.recomendar = "";
        this.message = "";
        this.actualizar("utilidad");
        this.actualizar("eficencia");
        this.actualizar("usabilidad");
    }

    cargarMensajes() {
        var mensaje = "Edad: " + this.edad + ".\n";
        mensaje += "Genero: " + this.genero + ".\n";
        mensaje += "Utilidad: " + this.utilidad + ".\n";
        mensaje += "Eficiencia: " + this.eficencia + ".\n";
        mensaje += "Usabilidad: " + this.usabilidad + ".\n";
        var media = (parseFloat(this.usabilidad) + parseFloat(this.eficencia) + parseFloat(this.utilidad)) / 3;
        mensaje += "Media general: " + media + ".\n";
        mensaje += "Posibilidad de recomendación: " + this.recomendar + ".\n";
        mensaje += "Mensaje: " + this.message + ".\n";
        return mensaje;
    }

    mandarEmail() {
        var subject = "Encuesta realizada por " + this.nombre + " " + this.apellidos;
        var body = this.cargarMensajes();
        body += window.location.href;
        body += ">";
        var uri = "mailto:" + this.email + "?subject=";
        uri += encodeURIComponent(subject);
        uri += "&body=";
        uri += encodeURIComponent(body);
        window.open(uri);
    }

    getUrlVars() {
        var elements = document.getElementById("myForm").elements;
        var obj = {};
        for (var i = 0; i < elements.length; i++) {
            var item = elements.item(i);
            obj[item.name] = item.value;
        }
        return obj;
    }

    cargarDatos() {
        var $_GET = this.getUrlVars();
        this.nombre = $_GET["nombre"];
        this.apellidos = $_GET["apellidos"];
        this.edad = $_GET["edad"];
        this.genero = $_GET["genero"];
        this.email = $_GET["email"];
        this.utilidad = $_GET["utilidad"];
        this.eficencia = $_GET["eficencia"];
        this.usabilidad = $_GET["usabilidad"];
        this.recomendar = $_GET["recomendar"];
        this.message = $_GET["message"];
        if (this.comprobarCampos($_GET)) {
            this.cargarMensajes();
            this.mandarEmail();
        } else
            alert("Campos no válidos");
    }

    comprobarCampos() {
        if (this.nombre == "")
            return false;
        else if (this.apellidos == "")
            return false;
        else if (this.edad == "" || parseFloat(this.edad) <= 0)
            return false;
        else if (this.genero == "")
            return false;
        else if (this.email == "")
            return false;
        else if (this.utilidad == "" || parseFloat(this.edad) < 0)
            return false;
        else if (this.eficencia == "" || parseFloat(this.edad) < 0)
            return false;
        else if (this.usabilidad == "" || parseFloat(this.edad) < 0)
            return false;
        else if (this.recomendar == "")
            return false;
        else if (this.message == "")
            return false;
        return true;
    }

    actualizar(clase) {
        var range = document.getElementsByClassName(clase);
        var valor = range[0].value;
        range[1].value = valor;
    }
}

var encuesta = new Formulario();

