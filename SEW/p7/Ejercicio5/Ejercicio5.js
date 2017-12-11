"use strict";

class Boton {
    constructor(valor) {
        this.valor = valor;
        this.contenido = "";
        this.activo = false;
    }
}

class Editor {
    constructor() {
        this.coleccion = new Array();
        this.coleccion.push(new Boton("HTML"));
        this.coleccion.push(new Boton("CSS"));
        this.coleccion.push(new Boton("JAVASCRIPT"));
        this.index = 0;
        this.pulsarBoton("HTML");
        this.actualizarIframe();
    }

    pulsarBoton(boton) {
        var index = 0;
        for (var i = 0; i < this.coleccion.length; i++) {
            if (this.coleccion[i].valor === boton) {
                index = i;
            }
            $("#" + this.coleccion[i].valor).css("background-color", "gray");
            this.coleccion[i].activo = false;
        }
        $("#" + this.coleccion[index].valor).css("background-color", "blue");
        this.coleccion[index].activo = true;
        this.index = index;
        $("textarea").val(this.coleccion[index].contenido);
    }

    redimensionarPaneles() {
        var alto = $(window).height() - $("h1").outerHeight(true) - $("h2").outerHeight(true)
            - $("footer").outerHeight(true);
        $("textarea").css("height", "" + alto + "px");
        $("iframe").css("height", "" + alto + "px");
        var ancho = $(window).width() / 2 - 2;
        $("textarea").css("width", "" + ancho + "px");
        $("iframe").css("width", "" + ancho + "px");
    }

    actualizarIframe() {
        $("textarea").on("change keyup paste", function () {
            var coleccion = editor.coleccion;
            var index = editor.index;
            var tipo = coleccion[index].valor;
            var a = $("textarea").val();
            switch (tipo) {
                case "HTML":
                    editor.coleccion[0].contenido = $("textarea").val();
                    break
                case "CSS":
                    editor.coleccion[1].contenido = $("textarea").val();
                    break
                case "JAVASCRIPT":
                    editor.coleccion[2].contenido = $("textarea").val();
                    break
            }
            editor.estructura = "<!DOCTYPE html><html><head><meta charset=\"UTF-8\">" +
                "<style>" + editor.coleccion[1].contenido + "</style></head><body>"
                + editor.coleccion[0].contenido + "<script>"
                + editor.coleccion[2].contenido + "</script></body></html>";
            $("iframe").contents().find("html").html(editor.estructura);
        });
    }

}

var editor = new Editor();


