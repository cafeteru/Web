$(document).ready(function () {
    agregarNavFooter();
});

function agregarNavFooter() {
    var url = window.location.href.toString();
    var header = $("header");
    var aux = "";
    header.append("<nav></nav>");
    if (url.indexOf("Tarea") >= 0) {
        aux = "../../../../";
        header.find("nav").load(aux + "template/menuSEWTarea.html");
    } else if (url.indexOf("Ejercicio") >= 0) {
        aux = "../../../";
        header.find("nav").load(aux + "template/menuSEWEjercicio.html");
    } else if (url.indexOf("SEW") > 0) {
        aux = "../../";
        header.find("nav").load(aux + "template/menuSEW.html");
    } else {
        header.find("nav").load(aux + "template/menu.html");
    }
    $("body").append("<footer></footer>");
    $("footer").load(aux + "template/footer.html");
}