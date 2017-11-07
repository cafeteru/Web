$(document).ready(function () {
    var url = window.location.href.toString();
    var header = $("header");
    var aux = "";
    header.append("<nav></nav>");
    if (url.indexOf("SEW") > 0) {
        aux = "../../";
        header.find("nav").load(aux + "template/menuSEW.html");
    } else {
        header.find("nav").load(aux + "template/menu.html");
    }

    $("main").append("<footer></footer>");
    $("footer").load(aux + "template/footer.html");
});