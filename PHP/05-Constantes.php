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

<h1>05-Constantes.php</h1>

<section>
    <h2>Codigo PHP </h2>
    <code>
        &lt;?php <br/>
        const SALUDO = "Hola";<br/>
        echo "Constante SALUDO: ", SALUDO; <br/>
        define("CONTADOR", 33);<br/>
        echo "Constante CONTADOR: ", CONTADOR <br/>
        ?&gt;
    </code>
</section>


<section>
    <h2>Resultado interpretado</h2>
    <?php
    const SALUDO = "Hola";
    echo "<p>Constante SALUDO: ", SALUDO, "</p>";
    define("CONTADOR", 33);
    echo "<p>Constante CONTADOR: ", CONTADOR, "</p>";
    ?>
</section>

</body>
</html>