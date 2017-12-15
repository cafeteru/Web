<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recursos PHP - Cristina Pelayo</title>
    <meta charset="utf-8"/>
    
    <meta name="author" content="Cris Pelayo" /> 
    
    <!-- enlace a la hoja de estilos -->
    <!-- link href="estilo.css" rel="stylesheet" /-->
</head>
    
<body>
    
    <h1>10-Funciones.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            
            // Invocación 1<br/>
            echo "Sumar 1 + 1: ",sumar(1, 1);<br/>
            <br/>
            // Declaración : Parámetros a y b <br/>
            function sumar($a, $b) {<br/>
                $resultado = $a + $b;<br/>
                // retorno de valor<br/>
                return $resultado;<br/>
            }<br/>
            <br/>
            // Invocación 2<br/>
            echo "Sumar 3 + 5: ",sumar(3, 5);<br/>
            
            

        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
            // Invocación 1
            echo "<p>Sumar 1 + 1: ",sumar(1, 1),"</p>";

            // Declaración : Parámetros $a y &b y retorno
            function sumar($a, $b) {
                $resultado = $a + $b;
                // retorno de valor
                return $resultado;
            }

            // Invocación 2
            echo "<p>Sumar 3 + 5: ",sumar(3, 5),"</p>";

           

            
        ?> 
    </section>

</body>
</html>