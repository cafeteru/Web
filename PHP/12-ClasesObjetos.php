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
    
    <h1>12-Reutilizacion.php</h1>
    <p>Crear en un archivo independiente la clase perro y se utiliza desde otro archivo PHP</p>
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            //incluyo la clase perro puede ser con require o include<br/>
            //require  si no existe genera error<br/>
            require("12-ClasePerro.php");<br/>
            //include si no existe genera aviso<br/>
            //include("12-ClasePerro.php");<br/>
        
            //para garantizar que se incluya solo una vez<br/>
            //require_once("12-ClasePerro.php");<br/>
            //include_once("12-ClasePerro.php");<br/>
            
        
            // Creación de objeto tom, instancia de Perro<br/>
            echo "Creo una nueva de la Clase incluida con require (o include)";<br/>
            $tom = new Perro ("Tom", "Spainel bretón","Negro y blanco","Macho");<br/>
            
            // Invocación de métodos<br/>
            $tom->verInfo();<br/>
            
            $tom->ladra();<br/>
      
            //método sobrecargada come()<br/>
            $tom->come();<br/>
            <br/>
        
            $pio = new Perro("Pio","","","");<br/>
            //utilización de __get<br/>
            echo "Me llamo ", $pio->nombre;<br/>
            //utilización de __set<br/>
            $pio->raza = "Sin raza";<br/>
            //método sobrecargada come()<br/>
            $pio->come("pienso");<br/>
            $pio->verInfo();<br/>
            

        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
            //incluyo la clase perro puede ser con require o include
            //require si no existe genera error
            require("12-ClasePerro.php");
            //include si no existe genera aviso
            //include("12-ClasePerro.php");
        
            //para garantizar que se incluya solo una vez
            //require_once("12-ClasePerro.php");
            //include_once("12-ClasePerro.php");
            
        
            // Creación de objeto tom, instancia de Perro
            echo "<p>Creo una nueva de la Clase incluida con require (o include)</p>";
            $tom = new Perro ("Tom", "Spainel bretón","Negro y blanco","Macho");
            
            // Invocación de métodos
            $tom->verInfo();
            
            $tom->ladra();
            //metodo sobrecargado come
            $tom->come();
            
        
            $pio = new Perro("Pio","","","");
            //utilización de __get
            echo "<p>Me llamo ", $pio->nombre, " </p>";
            //utilización de __set
            $pio->raza = "Sin raza";
            //metodo sobrecargado come
            $pio->come("pienso");
            $pio->verInfo();
        
     
        ?> 
    </section>

</body>
</html>