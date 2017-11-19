"use strict";

class Forma {
    constructor() {
        this.crear(50, 50);
    }

    colorAleatorio() {
        var letter = "0123456789ABCDEF".split("");
        var color = "#";
        for (var i = 0; i < 6; i++) {
            var position = Math.round(Math.random() * letter.length);
            color += letter[position];
        }
        this.color = color;
    }

    crear(top, left) {
        var width = Math.random() * 300 + 20;

        if (Math.random() > 0.5) {
            this.borderRadius = "50%";
        } else {
            this.borderRadius = "0%";
        }

        this.top = top + "px";
        this.left = left + "px";
        this.width = width + "px";
        this.height = width + "px";
        this.colorAleatorio();
        this.display = "block";
    }

    mover(top, left) {
        this.top = top + "px";
        this.left = left + "px";
    }
}

class Tablero {
    constructor() {
        this.form = new Forma();
        this.tiempoInicial = new Date().getTime();
        this.tiempoFinal = 0;
        this.mejorTiempo = 0;
    }

    calcularTiempo() {
        var endTime = new Date().getTime();
        var resultado = (endTime - this.tiempoInicial) / 1000;
        if (resultado < this.mejorTiempo || 0 === this.mejorTiempo) {
            this.mejorTiempo = resultado;
        }
        this.tiempoFinal = resultado;
    }

    tiempoEspera() {
        setTimeout(this.form.crear(), Math.random() * 2000);
        this.tiempoInicial = new Date().getTime();
    }

    colocarFigura() {
        var section = document.getElementById("form");
        var top = Math.random() * document.body.clientHeight / 2;
        var left = Math.random() * document.body.clientWidth;
        this.form.mover(top, left);
        section.style.backgroundColor = "yellow";
        section.style.top = this.form.top;
        section.style.left = this.form.left;
        section.style.width = this.form.width;
        section.style.height = this.form.width;
        section.style.backgroundColor = this.form.color;
        section.style.display = this.form.display;
        section.style.borderRadius = this.form.borderRadius;
    }

    pulsar() {
        this.form.display = "none";
        this.calcularTiempo();
        this.tiempoEspera();
        this.colocarFigura();
        document.getElementById("tiempoReaccion").innerHTML = this.tiempoFinal + " s";
        document.getElementById("mejor").innerHTML = this.mejorTiempo + " s";
    }
}

var tablero = new Tablero();
