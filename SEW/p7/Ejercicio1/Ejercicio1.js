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
        this.coleccion.push(new Elemento("h1", "h1Prueba", "Titulo h1"));
        this.coleccion.push(new Elemento("h2", "h2Prueba", "Titulo h2"));
        this.coleccion.push(new Elemento("p", "pPrueba", "Parrafo"));
    }

    pulsarBoton(id) {
        var elemento = $("body").find(id);
        if (elemento.length > 0) {

        } else {
        }
    }
}

var pagina = new Pagina();