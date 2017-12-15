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
    
    <h1>08-Condicionales.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            //if<br/>
            $variable = 4;<br/>
            if ($variable > 3) {<br/>
                echo  $variable,  " Es mayor que 3 ";<br/>
            }
            
            

        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
           
            //if
            $variable = 4;
            if ($variable > 3) {
                echo "<p>", $variable,  " es mayor que 3 </p>";
            }

           //switch
        $dia = rand(0, 3); // número aleatorio
        echo "<p>Día: ",$dia, "</p>" ;
        switch ($dia) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            default:
                echo "Día no valido";
        }
        //while
        $contar = rand(0, 7);
        // Mientras - $contar mayor que 0
        while($contar > 0) {
            echo "<p>Contando... : ", $contar, "</p>";
            $contar--; // equivale a "$contar = $contar - 1";
        } 
        
        $contar = rand(0, 7);
        do {
            echo "<p>El número es: ",$contar, "</p>";
            $contar++; // equivale a "$contar = $contar +-+ 1";

         // Mientras - $contar menor o igual que 4
        } while($contar <= 4); 

        //for
        for ($i = 0; $i<=5; $i++) {
           echo "<p>Contador: ",$i,"</p>";
        }       

                
        ?> 
    </section>

</body>
</html>