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
            echo "<script> alert('Archivo " . $this->nombreArchivo . " creado correctamente');</script>";
            if (!$archivo) {
                fclose($archivo);
                throw new Exception("No se ha podido crear el archivo" . $this->nombreArchivo);
            }
            fclose($archivo);
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
                $contenido = "";
                while (!feof($archivo)) {
                    $contenido .= fgets($archivo);
                }
                return $contenido;
            } else throw new Exception('No se puede leer el archivo' . $this->nombreArchivo);
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
            } else throw new Exception('No se puede escribir en el archivo' . $this->nombreArchivo);
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
                $original = file_get_contents($archivo);
                echo "" . $original;
                $contenido = $_POST["nuevo"];
                if ($contenido !== false) {
                    file_put_contents($archivo, $contenido);
                } else {
                    file_put_contents($this->nombreArchivo, $contenido);
                }
            } else throw new Exception('No se puede modificar el archivo' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
        if (!$archivo)
            fclose($archivo);
    }

    function eliminarContenido()
    {

    }

    function eliminarArchivo()
    {
        try {
            $exito = unlink($this->nombreArchivo);
            if (!$exito) {
                throw new Exception("No se pudo borrar el archivo" . $this->nombreArchivo);
            }
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function mostrarTraza($e)
    {
        echo "<h2>Fallo con el archivo" . $this->nombreArchivo . "</h2>";
        echo "<p>" . $e->getMessage() . "</p>";
    }
}

?>