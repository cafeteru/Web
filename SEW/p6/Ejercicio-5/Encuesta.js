"use strict";

class Formulario {
    constructor() {
        this.nombre = "";
        this.apellidos = "";
        this.edad = 0;
        this.genero = "";
        this.email = "";
        this.utilidad = 0;
        this.eficencia = 0;
        this.usabilidad = 0;
        this.recomendar = "";
        this.message = "";
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
        this.cargarMensajes();
        this.mandarEmail();
    }
}

var encuesta = new Formulario();

