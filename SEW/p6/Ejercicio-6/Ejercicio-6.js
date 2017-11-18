"use strict";

class Forma {
    constructor() {
        this.top = "";
        this.left = "";
        this.width = "";
        this.height = "";
        this.color = "";
        this.display = "";
        this.crear();
    }

    colorAleatorio() {
        var letter = "0123456789ABCDEF".split("");
        var color = "#";
        for (var i = 0; i < 6; i++) {
            var position = Math.round(Math.random() * letter.length);
            color += letter[position];
        }
        return color;
    }

    crear() {
        //var top = Math.random() * document.body.clientHeight;
        //var left = Math.random() * document.body.clientWidth;
        var width = Math.random() * 300 + 20;

        if (Math.random() > 0.5) {
            this.borderRadius = "50%";
        } else {
            this.borderRadius = "0%";
        }

        this.top = 50 + "px";
        this.left = 50 + "px";
        this.width = width + "px";
        this.height = width + "px";
        this.color = this.colorAleatorio();
        this.display = "block";
    }
}

class Tablero {
    constructor() {
        this.form = new Forma();
        this.tiempoInicial = new Date().getTime();
        this.mejorTiempo = 0;
    }

    calcularTiempo() {
        var endTime = new Date().getTime();
        var resultado = (endTime - this.tiempoInicial) / 1000;
        if (resultado < this.mejorTiempo || this.mejorTiempo == 0) {
            this.mejorTiempo = resultado;
        }
        return resultado;
    }

    tiempoEspera() {
        setTimeout(this.form = new Forma(), Math.random() * 2000);
    }

    pulsar() {
        this.form.style.display = "none";
        document.getElementById("tiempoReaccion").innerHTML = this.calcularTiempo() + " s";
        this.tiempoEspera();
    }
}

var tablero = new Tablero();