"use strict";

class Elemento {
    constructor(etiqueta, id, valor) {
        this.etiqueta = etiqueta;
        this.id = id;
        this.valor = valor;
        this.visible = true;
    }
}

class Pagina {
    constructor() {
        this.inicializar();
    }

    inicializar() {
        this.coleccion = new Array();
        this.añadirElemento(new Elemento("h1", "h1Prueba", "Titulo h1"));
        this.añadirElemento(new Elemento("h2", "h2Prueba", "Titulo h2"));
        this.añadirElemento(new Elemento("p", "pPrueba", "Parrafo"));
    }

    pulsarBoton(id) {
        for (var i = 0; i < this.coleccion.length; i++) {
            if (this.coleccion[i].id === id) {
                if (this.coleccion[i].visible) {
                    $("#" + id).fadeOut(500);
                    this.coleccion[i].visible = false;
                } else {
                    $("#" + id).fadeIn(500);
                    this.coleccion[i].visible = true;
                }
                break;
            }
        }
    }

    añadirElemento(elemento) {
        this.coleccion.push(elemento);
        var cadena = "<" + elemento.etiqueta + " id='" + elemento.id + "'>" + elemento.valor + "</"
            + elemento.etiqueta + ">";
        $("body").append(cadena);
        this.añadirBotonElemento(elemento.id);
        this.añadirComboBox(elemento.id);
    }

    añadirBotonElemento(id) {
        var cadena = "<input type='button' value='" + id + "' onclick='pagina.pulsarBoton(\"" + id + "\")'/>";
        $("#buttonGroup").append(cadena);
    }

    añadirComboBox(id) {
        var cadena = "<option value=" + id + ">" + id + "</option>"
        $("select").append(cadena);
    }

    modificarContenido() {
        var id = $("select option:selected").text();
        for (var i = 0; i < this.coleccion.length; i++) {
            if (this.coleccion[i].id === id) {
                this.coleccion.valor = $("#contenido").val();
                $("#" + id).html(this.coleccion.valor);
                break;
            }
        }
    }

    agregarElemento() {
        this.añadirElemento(new Elemento($("#tarea3Etiqueta").val(), $("#tarea3Id").val(),
            $("#tarea3Contenido").val()));
    }

    eliminarElemento(elemento) {
        var id = $("#tarea4").val();
        var i = this.coleccion.findIndex(i => i.id === id);
        if (i != -1) {
            this.coleccion.splice(i, 1);
            $("#" + id).remove();
            $("select option[value='" + id + "']").remove();
            $("input[value='" + id + "']").remove();
        }
    }

    mostrarDom() {
        var cadena = "";
        $("*", document.body).each(function () {
            var etiquetaPadre = $(this).parent().get(0).tagName;
            cadena += "Etiqueta padre : " + etiquetaPadre + " elemento : "
                + $(this).get(0).tagName + " valor: " + $(this).text()+"<br>";
        });
        pagina.añadirElemento(new Elemento("p", "dom", cadena));
    }

    mostrarInformacion(element){
        var etiquetaPadre = $(element).parent().get(0).tagName;
        $(element).prepend(document.createTextNode("Etiqueta padre : <" + etiquetaPadre + "> elemento : <"
            + $(element).get(0).tagName + "> valor: "));
    }
}

var pagina = new Pagina();