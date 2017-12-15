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
    
    <h1>06-TiposEscalares.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            $variableBoolean = True; <br/>
            $variableBooleanFalse = false;<br/>
            $variableInteger = 33;<br/>
            $variableFloat = 3.14159;<br/>
            $variableString = "Hola soy el valor de la variableString";<br/>

            echo "Valor de variableInteger:  ",$variableInteger;<br/>
            echo "Valor de VariableBooleanFalse: ",$variableBooleanFalse," (vacio false)" ; <br/>
            echo "Valor de variableBooleanFalse con ahormado(int): ", (int)$variableBooleanFalse," ( 0 false )";<br/>
            echo "Valor de variableFloat: ",$variableFloat;<br/>
            echo "Valor de variableString: ",$variableString;<br/>
            echo "Valor de la variableIndefinida (provoca un error): ", $variableIndefinida; <br/>
        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
            //Tipos escalares
            $variableBooleanTrue = true; 
            $variableBooleanFalse = false;
            $variableInteger = 33;
            $variableFloat = 3.14159;
            $variableString = "Hola soy el valor de variableString";
            
            // ( 1 = true, Vacio = false )
            echo "<p>Valor de variableBooleanTrue: ",$variableBooleanTrue," (1 true)</p>"; 
            echo "<p>Valor de VariableBooleanFalse: ",$variableBooleanFalse," (vacio false) </p>"; 
            echo "<p>Valor de variableBooleanFalse con ahormado(int): ", (int)$variableBooleanFalse," ( 0 false )</p>";
            echo "<p>Valor de variableInteger: ",$variableInteger,"</p>";
            echo "<p>Valor de variableFloat: ",$variableFloat,"</p>";
            echo "<p>Valor de variableString: ",$variableString,"</p>";    
            echo "<p>Valor de la variableIndefinida (provoca un error): ", $variableIndefinida, "</p>"; // provoca un error
        ?> 
    </section>

</body>
</html>