<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recursos PHP - Cristina Pelayo</title>
    <meta charset="utf-8"/>

    <meta name="author" content="Cris Pelayo"/>

    <!-- enlace a la hoja de estilos -->
    <!-- link href="estilo.css" rel="stylesheet" /-->
</head>

<body>
<h1>02-Tiempo.php</h1>
<p>Comprobar que el resultado del interprete cambia de una a otra ejecución. Se utiliza la función time() para comprobar
    que el resultado varía en el tiempo.</p>

<section>
    <h2>Codigo PHP </h2>

    <code>
        &lt;?php <br/>
        echo "La hora actual es: " . time(); <br/>
        ?&gt;
    </code>
</section>

<section>
    <h2>Resultado interpretado</h2>

    <?php
    echo "<p> La hora actual es: ", time(), "</p>";//Cambiara en cada ejecución
    ?>
</section>
</body>
</html>