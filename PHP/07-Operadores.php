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
    
    <h1>07-Operadores.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            echo"Operación (4/2) = ", (4/2); //muestra 2 <br/>
            echo "Valor a = ",$a," y valor de b = ",$b;<br/>
            $saludo = "Hola";<br/>
            $saludo .= " mundo"; <br/>
            echo "Valor de saludo = ",$saludo;  <br/>
            $b += 1; //$b =5    <br/>     
            echo "Valor b += 1 = ",$b;<br/>
        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
           
            //aritmeticos
            echo"<p>Operación (4/2) = ", (4/2),"</p>"; //muestra 2
            //asignación
            $a = ($b = 4) + 5;// $a = 9 y $b = 4   
            echo "<p>Valor a = ",$a," y valor de b = ",$b,"</p>";  
            // operador .= 
            $saludo = "Hola";
            $saludo .= " mundo"; // $saludo = Hola mundo
            echo "<p>Valor de saludo = ",$saludo,"</p>";  
            //operador combinado suma y asignación
            $b += 1; //$b =5         
            echo "<p>Valor b += 1 = ",$b,"</p>";
            // asignación por referncia
            $a = 5;  
            $b = &$a;
            echo "<p>Valor de variable a = ",$a,"</p>"; 
            echo "<p>Valor de variable b = ",$b,"</p>"; 
            $a = 33;
            echo "<p>Cambiado el valor de variable a =", $a,"</p>"; 
            echo "<p>Afecta al valor de variable b, que sera ", $b,"</p>"; 
        
            //Ternario (expr1) ? (expr2) : (expr3) 

            
        ?> 
    </section>

</body>
</html>