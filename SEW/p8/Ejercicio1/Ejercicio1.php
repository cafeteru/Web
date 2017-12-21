<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Iván González Mahagamage"/>
    <meta name="description"
          content="Ejercicio 1 de la práctica 08 asignatura Software y Estándares para la Web"/>
    <meta name="keywords" content="SEW,Práctica08,ejercicio1,Software,Estándares,Web"/>
    <title>Práctica 08 | Software y Estándares para la Web</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon"
          href="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=1b184fdc380484a7bbdad079aa2a52135&amp;authkey=ATTjsDQ1WDwFg-XqhaEbSF4&amp;e=168190abc0264416a06fc92675ca41aa"/>
    <link rel="stylesheet" type="text/css" href="Ejercicio1.css"/>
</head>
<body>
<header>
    <h1>Ejercicio 1 - Práctica 08 </h1>
</header>
<main>
    <form method="POST">
        <h2>Crear archivo</h2>
        <section>
            <label>Nombre del archivo</label>
            <input type="text" name="crear"/>
            <input type="submit" value="Pulsa"/>
        </section>
        <?php
        require 'moduloArchivo.php';
        $objeto;
        if ($_POST) {
            if (isset($_POST["crear"]) && "" != $_POST["crear"]) {
                $objeto = new ArchivoTexto($_POST["crear"]);
                $objeto->crearArchivo();
            }
        }
        ?>
    </form>
    <form method="POST">
        <h2>Visualizar archivo</h2>
        <section>
            <p>
                <label>Nombre del archivo</label>
                <input type="text" name="visualizar"/>
                <input type="submit" value="mostrar"/>
            </p>
            <?php
            if ($_POST) {
                if (isset($_POST["visualizar"]) && "" != $_POST["visualizar"]) {
                    $objeto = new ArchivoTexto($_POST["visualizar"]);
                    $contenido = $objeto->leerArchivo();
                    echo '<textarea disabled="true" rows="10">' . $contenido . '</textarea>';
                }
            }
            ?>
        </section>
    </form>
    <form method="POST">
        <h2>Añadir a archivo</h2>
        <section>
            <p>
                <label>Nombre del archivo</label>
                <input type="text" name="añadir"/>
                <input type="submit" value="Añadir"/>
            </p>
            <textarea rows="10" name="contenido"></textarea>
            <?php
            if ($_POST) {
                if (isset($_POST["añadir"]) && "" != $_POST["añadir"]) {
                    $objeto = new ArchivoTexto($_POST["añadir"]);
                    $contenido = $objeto->añadirContenidoArchivo();
                }
            }
            ?>
        </section>
    </form>
    <form method="POST">
        <h2>Modificar información del archivo</h2>
        <section>
            <p>
                <label>Nombre del archivo</label>
                <input type="text" name="modificar"/>
                <input type="submit" value="Cargar"/>
                <input type="submit" value="Modificar"/>
            </p>
            <?php
            if ($_POST) {
                if (isset($_POST["fila"]) && "" != $_POST["fila"]) {
                    $objeto = new ArchivoTexto($_POST["nombre"]);
                    $contenido = $objeto->modificarContenido();
                } else if (isset($_POST["modificar"]) && "" != $_POST["modificar"]) {
                    $objeto = new ArchivoTexto($_POST["modificar"]);
                    $contenido = $objeto->cargarContenidoEnArray();
                    echo '<p><input type="text" name="nombre" value="' . $_POST["modificar"] . '" readonly="true"/></p>';
                    echo '<select name="fila">';
                    $numFila = 0;
                    foreach ($contenido as $fila) {
                        echo '<option value=' . $numFila++ . '>' . $fila . '</option>';
                    }
                    echo '</select>';
                    echo ' <input type="text" name="nuevo"/>';
                }
            }
            ?>
        </section>
    </form>
    <form method="POST">
        <h2>Eliminar información del archivo</h2>
        <section>
            <p>
                <label>Nombre del archivo</label>
                <input type="text" name="modificar"/>
                <input type="submit" value="Cargar"/>
                <input type="submit" value="Eliminar"/>
            </p>
            <?php
            if ($_POST) {
                if (isset($_POST["fila"]) && "" != $_POST["fila"]) {
                    $objeto = new ArchivoTexto($_POST["nombre"]);
                    $contenido = $objeto->eliminarContenido();
                } else if (isset($_POST["modificar"]) && "" != $_POST["modificar"]) {
                    $objeto = new ArchivoTexto($_POST["modificar"]);
                    $contenido = $objeto->cargarContenidoEnArray();
                    echo '<p><input type="text" name="nombre" value="' . $_POST["modificar"] . '" readonly="true"/></p>';
                    echo '<select name="fila">';
                    $numFila = 0;
                    foreach ($contenido as $fila) {
                        echo '<option value=' . $numFila++ . '>' . $fila . '</option>';
                    }
                    echo '</select>';
                    echo ' <input type="text" name="nuevo"/>';
                }
            }
            ?>
        </section>
    </form>
    <form method="POST">
        <h2>Eliminar archivo</h2>
        <section>
            <label>Nombre del archivo</label>
            <input type="text" name="eliminar"/>
            <input type="submit" value="Eliminar"/>
            <?php if ($_POST) {
                if (isset($_POST["eliminar"]) && "" != $_POST["eliminar"]) {
                    $objeto = new ArchivoTexto($_POST["eliminar"]);
                    $objeto->eliminarArchivo();
                }
            } ?>
        </section>
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