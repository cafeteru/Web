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

<h1>13-Ficheros.php</h1>

<section>
    <h2>Resultado interpretado</h2>

    <?php

    echo "<p>Valor de Document_root: ", $_SERVER['DOCUMENT_ROOT'], "</p>";
    // Crea variable con nombre de archivo
    $NombreArchivo = "prueba.txt";

    //leemos el contenido del archivo
    try {
        if (file_exists($NombreArchivo)) {
            $archivo = fopen($NombreArchivo, "r");
            echo "<p>Contenido del archivo Prueba.txt</p>";
            while (!feof($archivo)) {
                $linea = fgets($archivo);
                echo "<p>" . $linea . "</p>";
            }
            fclose($archivo);

        } else throw new Exception('No existe el archivo, se creará');
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "<p>Archivo Prueba.txt creado</p>";
        $archivo = fopen($NombreArchivo, "ab+");
        $cadena = date("d.m.y") . "\t" . time() . "\r\n";
        fwrite($archivo, $cadena);
        fclose($archivo);
    }

    //Obtiene el contenido
    $actual = file_get_contents($NombreArchivo);

    if ($actual !== false) {
        //Añade nueva información al archivo
        $actual .= date("d.m.y") . "\t" . time() . "\r\n";
        //Escribe el nuevo contenido en el archivo
        file_put_contents($NombreArchivo, $actual);
    } else {
        echo "<p>ERROR: el archivo no existe</p>";

    }
    ?>
</section>

</body>
</html>