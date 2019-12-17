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
                throw new Exception("No se ha podido crear el archivo" . $this->nombreArchivo);
            } else {
                echo "<script> alert('Archivo " . $this->nombreArchivo . " creado correctamente');</script>";
            }
            fclose($archivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function leerArchivo()
    {
        try {
            if (file_exists($this->nombreArchivo)) {
                $archivo = fopen($this->nombreArchivo, "r");
                $contenido = "";
                while (!feof($archivo)) {
                    $contenido .= fgets($archivo);
                }
                if (!$archivo)
                    fclose($archivo);
                return $contenido;
            } else throw new Exception('No se puede leer el archivo ' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
        return null;
    }

    function añadirContenidoArchivo()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $archivo = fopen($this->nombreArchivo, "a");
                $contenido = $_POST["contenido"];
                fwrite($archivo, $contenido . PHP_EOL);
                echo "<script> alert('Contenido añadido al fichero " . $this->nombreArchivo . "  correctamente');</script>";
                if (!$archivo)
                    fclose($archivo);
            } else throw new Exception('No se puede escribir en el archivo' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }

    }

    function cargarContenidoEnArray()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                return file($this->nombreArchivo);
                if (!$archivo)
                    fclose($archivo);
            } else throw new Exception('No se puede cargar el archivo' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }

    }

    function modificarContenido()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $contenido = file($this->nombreArchivo);
                $contenidoArchivo = "";
                $archivo = fopen($this->nombreArchivo, "w+");
                for ($i = 0; $i <= sizeof($contenido); $i++) {
                    if ($i == $_POST["fila"]) {
                        $contenidoArchivo .= $_POST["nuevo"] . PHP_EOL;
                    } else {
                        $contenidoArchivo .= $contenido[$i];
                    }
                }
                fwrite($archivo, $contenidoArchivo);
                echo "<script> alert('Archivo " . $this->nombreArchivo . " modificado correctamente');</script>";
                if (!$archivo)
                    fclose($archivo);
            } else throw new Exception('No se puede modificar el archivo' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function eliminarContenido()
    {
        $archivo = false;
        try {
            if (file_exists($this->nombreArchivo)) {
                $contenido = file($this->nombreArchivo);
                $contenidoArchivo = "";
                $archivo = fopen($this->nombreArchivo, "w+");
                for ($i = 0; $i <= sizeof($contenido); $i++) {
                    if ($i == $_POST["fila"]) {
                        continue;
                    } else {
                        $contenidoArchivo .= $contenido[$i];
                    }
                }
                fwrite($archivo, $contenidoArchivo);
                echo "<script> alert('Archivo " . $this->nombreArchivo . " modificado correctamente');</script>";
                if (!$archivo)
                    fclose($archivo);
            } else throw new Exception('No se puede modificar el archivo' . $this->nombreArchivo);
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function eliminarArchivo()
    {
        try {
            $exito = unlink($this->nombreArchivo);
            if (!$exito) {
                throw new Exception("No se pudo borrar el archivo" . $this->nombreArchivo);
            } else {
                echo "<script> alert('Archivo " . $this->nombreArchivo . " borrado correctamente');</script>";
            }
        } catch (Exception $exception) {
            $this->mostrarTraza($exception);
        }
    }

    function mostrarTraza($e)
    {
        echo "<h2>Fallo con el archivo " . $this->nombreArchivo . "</h2>";
        echo "<p>" . $e->POSTMessage() . "</p>";
    }
}

?>