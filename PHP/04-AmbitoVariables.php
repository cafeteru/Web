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

<h1>04-AmbitoVariables.php</h1>

<section>
    <h2>Codigo PHP </h2>
    <code>
        &lt;?php <br/>

        function test(){<br/>
        $a = 0;<br/>
        echo $a;<br/>
        $a++;<br/>
        } <br/>
        <br/>
        function test2(){<br/>
        static $a = 0;<br/>
        echo $a;<br/>
        $a++;<br/>
        }<br/>
        <br/>
        echo "Crear dos variables y dentro de la Función Suma se declaran como global";<br/>
        $x = 1;<br/>
        $y = 2;<br/>
        function Suma(){<br/>
        global $x, $y;<br/>
        $y = $x + $y;<br/>
        }<br/>

        Suma();<br/>
        echo "Valor de variable y = ",$y," su valor se modifica dentro de la funcion;<br/>
        ?&gt;
    </code>
</section>


<section>
    <h2>Resultado interpretado</h2>
    <?php

    //Ámbito de las variables a solo se incrementa en función pero no tiene efecto fuera
    function test()
    {
        $a = 0;
        echo $a;
        $a++;
    }

    echo "Función test con variable local, en cada llamada se inicia a 0";
    echo "<p>Llamada1. Valor de variable a: ", test(), "</p>";  // siempre escribe 0
    echo "<p>Llamada2. Valor de variable a: ", test(), "</p>";  // siempre escribe 0

    // definición con static - mantiene el valor
    function test2()
    {
        static $a = 0;
        echo $a;
        $a++;
    }

    echo "Función test2 con variable estatica, en cada llamada el valor se incrementa";
    echo "<p>Llamada1. Valor de variable a: ", test2(), "</p>";
    echo "<p>Llamada2. Valor de variable a: ", test2(), "</p>";

    //utilización de global
    echo "Crea dos variables y dentro de la Función Suma se declaran como global";
    $x = 1;
    $y = 2;
    function Suma()
    {
        global $x, $y;
        $y = $x + $y;
    }

    Suma();
    echo "<p>Valor de variable y = ", $y, " su valor se modifica dentro de la funcion</p>"; // se modifica el valor de la varible $y


    const SALUDO = " Hola ";
    echo SALUDO;
    define("MUNDO", "Mundo");
    echo MUNDO;

    ?>
</section>

</body>
</html>