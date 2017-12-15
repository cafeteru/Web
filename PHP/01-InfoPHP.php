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
    
    <h1>01-InfoPHP.php</h1>
    
    <section>     
        <h2>Codigo PHP </h2> 
        <!-- Muestra el código fuente legible -->
        <code>
        &lt;?php <br/>
            # El operador . concatena cadenas<br/>
            echo "La versión PHP instalada es " . phpversion();  <br/>
            echo phpinfo();<br/>
        ?&gt;              
        </code>
    </section>
    
    <section>
        <!-- Contiene el código PHP -->
        <h2>Resultado interpretado</h2>
    
        <?php 
            # El operador . concatena cadenas
            echo "<p> La versión PHP es: " . phpversion() . "</p>";
            echo phpinfo();
        ?> 
     </section>

</body>
</html>