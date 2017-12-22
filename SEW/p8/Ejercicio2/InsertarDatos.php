<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Iván González Mahagamage"/>
    <meta name="description"
          content="Ejercicio 2 de la práctica 08 asignatura Software y Estándares para la Web"/>
    <meta name="keywords" content="SEW,Práctica08,ejercicio2,Software,Estándares,Web"/>
    <title>Práctica 08 | Software y Estándares para la Web</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon"
          href="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=1b184fdc380484a7bbdad079aa2a52135&amp;authkey=ATTjsDQ1WDwFg-XqhaEbSF4&amp;e=168190abc0264416a06fc92675ca41aa"/>
    <link rel="stylesheet" type="text/css" href="Ejercicio2.css"/>
</head>
<body>
<header>
    <h1>Ejercicio 2 - Práctica 08 </h1>
</header>
<main>
    <form method="POST">
        <p>
            <label>Nombre:</label>
            <input type="text" name="nombre"/>
        </p>
        <p>
            <label>Descripción:</label>
        </p>
        <textarea rows="10" name="descripcion"></textarea>

        <p>
            <label>Universo</label>
            <select name="universo">
                <option value="Starcraft">Starcraft</option>
                <option value="Warcraft">Warcraft</option>
                <option value="Diablo">Diablo</option>
                <option value="Overwatch">Overwatch</option>
            </select>
        </p>
        <p>
            <label>Tipo:</label>
            <select name="tipo">
                <option value="Asesino">Asesino</option>
                <option value="Apoyo">Apoyo</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Especialista">Especialista</option>
            </select>
        </p>
        <p>
            <label>Tipo de montura:</label>
            <input type="number" name="montura" value="0" min="0" max="2"/>
        </p>
        <p>
            <label>Precio en monedas:</label>
            <input type="number" name="monedas" step="100" value="0" min="0" max="15000"/>
        </p>
        <p>
            <label>Precio en Euros:</label>
            <input type="number" name="euros" value="0" min="0" max="20"/>
        </p>
        <input type="submit" value="Agregar"/>
        <?php
        require 'Conexion.php';

        $valido = false;
        $error = "Error: ";
        if (sizeof($_POST) > 1) {
            if ("" == trim($_POST["nombre"])) {
                $error .= "nombre vacío.";
            } elseif ("" == trim($_POST["descripcion"])) {
                $error .= "descripcion no válido.";
            } elseif ("" == trim($_POST["universo"])) {
                $error .= "universo no válido.";
            } elseif ("" == trim($_POST["tipo"])) {
                $error .= "tipo no válido.";
            } elseif ("" == trim($_POST["montura"]) || is_numeric($_POST["montura"]) === false) {
                $error .= "montura no válido.";
            } elseif ("" == trim($_POST["monedas"]) || is_numeric($_POST["monedas"]) === false) {
                $error .= "monedas no válido.";
            } elseif ("" == trim($_POST["euros"]) || is_numeric($_POST["euros"]) === false) {
                $error .= "euros no válido.";
            } else {
                $valido = true;
            }
        }
        if (sizeof($_POST) > 1 && $valido == 0)
            echo '<script>alert("' . $error . '");</script>';
        $db->select_db("heroes");
        if ($_POST && $valido == 1) {
            $consultaPre = $db->prepare("INSERT INTO heroe (heroe_id, introduccion, universo,tipo,montura_caballo, precio_monedas,precio_real) VALUES (?,?,?,?,?,?,?)");
            $consultaPre->bind_param('ssssiid',
                $_POST["nombre"], $_POST["descripcion"], $_POST["universo"], $_POST["tipo"], $_POST["montura"], $_POST["monedas"], $_POST["euros"]);
            $consultaPre->execute();
            echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
            $consultaPre->close();
        }
        $db->close();
        ?>
    </form>
</main>
<footer>
    <address>
        <p>Autor: Iván González Mahagamage</p>
        <p>Contacto: <a href="mailto:uo239795@uniovi.es">uo239795@uniovi.es</a></p>
    </address>
    <p>
        <a href="https://validator.w3.org/check?uri=referer">
            <img src="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=1dc29309c5f484ddbb0d9db5b1c80c434&amp;authkey=ARFq9i5Nm2QpUmJj55IcDgQ&amp;e=705a58700abd4191a586e91989da4a0e"
                 alt="HTML5 Válido" longdesc="https://validator.w3.org/check?uri=referer"/>
        </a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img src="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=190f4b784428a40a2b969ae7f977a3d85&amp;authkey=AegPExwjY0qZ80NLtEpPmYo&amp;amp;e=41cf2c002341476e8abb088bc7c0a15b"
                 alt="¡CSS Válido!"/>
        </a>
    </p>
</footer>
</body>
</html>