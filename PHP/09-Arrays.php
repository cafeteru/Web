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
    
    <h1>09-Arrays.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            
            //Array indexados<br/>
            $mediciones = array(15,33, 43, 56);<br/>
            echo var_dump($mediciones);<br/>

            $ciudades = array("Madrid", "Barcelona", "Sevilla");<br/>
            echo var_dump($ciudades);<br/>
            <br/>
            //Array Asociativos<br/>
            $temperatura=array("Madrid"=>37,"Barcelona"=>33);<br/>
            $temperatura["Madrid"] = 40;<br/>
            echo "Temperatura original: ",var_dump($temperatura);<br/>
            $temperatura["Santander"] = 29;<br/>
            echo var_dump($temperatura);<br/>
            <br/>
            //Array Multidimensionalesv
            $meteorologia = array(<br/>
                        "Madrid" => array("temperatura"=>37,<br/>
                                    "precipitaciones" =>607.77<br/>
                        ),<br/>
                        "Barcelona" => array("temperatura"=>33,<br/>
                                    "precipitaciones" =>205.5,<br/>
                                    "indiceUVA" => 8<br/>
                        )<br/>
            );// array meteorología<br/>
            
            echo "Temperatura de Madrid: ", $meteorologia['Madrid']['temperatura']; <br/>
            echo "Indice UVA de Barcelona: ", $meteorologia['Barcelona']['indiceUVA']; <br/>
            

        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
            //Array indexados
            $mediciones = array(15,33, 43, 56);
            echo "<p>",var_dump($mediciones),"</p>";

            $ciudades = array("Madrid", "Barcelona", "Sevilla");
            echo "<p>",var_dump($ciudades),"</p>";

            //Array Asociativos
            $temperatura=array("Madrid"=>37,"Barcelona"=>33);
            $temperatura["Madrid"] = 40;
            echo "<p>Temperatura original: ",var_dump($temperatura),"</p>";
            $temperatura["Santander"] = 29;
            echo "<p>",var_dump($temperatura),"</p>";
           
            //Array Multidimensionales
            $meteorologia = array(
                        "Madrid" => array("temperatura"=>37,
                                    "precipitaciones" =>607.77
                        ),
                        "Barcelona" => array("temperatura"=>33,
                                    "precipitaciones" =>205.5,
                                    "indiceUVA" => 8
                        )
            );// array meteorología
            
            echo "<p>Temperatura de Madrid: ", $meteorologia['Madrid']['temperatura'],"</p>"; 
            echo "<p>Indice UVA de Barcelona: ", $meteorologia['Barcelona']['indiceUVA'],"</p>"; 

            
        ?> 
    </section>

</body>
</html>