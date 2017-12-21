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

<h1>03-Variables.php</h1>

<section>
    <h2>Codigo PHP </h2>
    <code>
        &lt;?php <br/>

        //Tipo escalar string<br/>
        $variable = "Hola soy el valor de la "variable" que será tipo string";<br/>
        echo "Valor de variable: ",$variable;<br/>
        <br/>
        //Nombre empezando por _<br/>
        $_9 = 9; <br/>
        echo "Valor de la variable _9 (integer): ", $_9;
        <br/>
        // acceso a una variable no definida (NULL) provoca un error<br/>
        echo "Valor de la variableIndefinida (provoca un error): ", $variableIndefinida; <br/>
        <br/>
        /* Variable predefinida _SERVER[] <br/>
        contiene información del entorno del servidor y de ejecución. <br/>
        Se crea en el servidor Web */ <br/>
        <br/>
        echo $_SERVER["SERVER_NAME"]; //SERVER_NAME proporciona el nombre del servidor <br/>
        echo $_SERVER["PHP_SELF"];//PHP_SELF proporciona el nombre del archivo que se está ejecutando <br/>
        <br/>
        $variable = 33; // cambia el tipo de string a integer<br/>
        echo "Valor de variable + 1: ",$variable+1; //Resultado 34 pero no altera $variable <br/>
        echo "var_dump($variable) proporciona información sobre variable: ",var_dump($variable);// int(33)<br/>
        ?&gt;
    </code>
</section>


<section>
    <h2>Resultado interpretado</h2>
    <?php
    //Tipo escalar string
    $variable = "Hola soy el valor de la variable que será tipo string";
    echo "<p>Valor de variable: ", $variable, "</p>";

    //Nombre empezando por _
    $_9 = 9;
    echo "<p>Valor de la variable _9(integer): ", $_9, " </p>";

    // acceso a una variable no definida (NULL) provoca un error
    echo "<p>Valor de la variableIndefinida (provoca un error): ", $variableIndefinida, "</p>"; // provoca una error;

    /* Variable predefinida _SERVER[]
   contiene información del entorno del servidor y de ejecución. Se crea en el servidor Web */
    echo "<p>Servidor: ", $_SERVER["SERVER_NAME"], "</p>"; //SERVER_NAME proporciona el nombre del servidor
    echo "<p>Archivo: ", $_SERVER["PHP_SELF"], "</p>";   //PHP_SELF proporciona el nombre del archivo que se está ejecutando

    $variable = 33;
    echo "<p>Valor de variable + 1: ", $variable + 1, "</p>";   //Resultado 34

    //var_dump($Variable) muestra información sobre la variable, incluyendo su tipo y su valor
    echo "<p>Información sobre variable: ", var_dump($variable), "</p>";

    ?>
</section>

</body>
</html>