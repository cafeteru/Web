<?php

class ArchivoTexto
{
    protected $nombreArchivo;

    function __construct($nombre)
    {
        $this->nombreArchivo = $nombre;
    }

    function crearArchivo()
    {
        try {
            $archivo = fopen($this->nombreArchivo, "a");
            if (!$archivo) {
                fclose($archivo);
                throw new Exception("No se ha podido crear el archivo.");
            }
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function leerArchivo()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $archivo = fopen($this->nombreArchivo, "r");
                echo "<p>Contenido del archivo " . $this->nombreArchivo . "</p>";
                $contenido = "";
                while (!feof($archivo)) {
                    $contenido .= fgets($archivo);
                }
                echo "<p>" . $contenido . "</p>";
            } else throw new Exception('No se puede leer el archivo.');
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
        if (!$archivo)
            fclose($archivo);
    }

    function añadirContenidoArchivo()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $archivo = fopen($this->nombreArchivo, "w");
                $contenido = file_get_contents($archivo);
                $contenido .= $_POST["nuevo"];
                file_put_contents($archivo, $contenido);
            } else throw new Exception('No se escribir en el archivo.');
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
        if (!$archivo)
            fclose($archivo);
    }

    function modificarContenido()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $archivo = fopen($this->nombreArchivo, "w");
                $contenido = file_get_contents($archivo);
                $contenido .= $_POST["nuevo"];
                if ($contenido !== false) {
                    file_put_contents($archivo, $contenido);
                } else {
                    file_put_contents($this->nombreArchivo, $contenido);
                }
            } else throw new Exception('No se escribir en el archivo.');
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
        if (!$archivo)
            fclose($archivo);
    }

    function mostrarTraza($e)
    {
        echo "<h2>Fallo al crear el archivo</h2>";
        echo "<p>" . $e->getMessage() . "</p>";
    }
}

?>