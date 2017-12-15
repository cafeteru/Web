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
    
    <h1>11-Clases.php</h1>
    
    <section>
        <h2>Codigo PHP </h2>  
        <code>
        &lt;?php <br/>
            
            class Perro {<br/>
               // Datos: Propiedades<br/>
               private $nombre;        <br/>
               private $raza;<br/>
               private $color;<br/>
               private $sexo;<br/>
               <br/>
               //constructor<br/>
                function __construct($nombre,$raza,$color,$sexo) {<br/>
                            $this->nombre = $nombre;<br/>
                            $this->raza = $raza;<br/>
                            $this->color = $color;<br/>
                            $this->sexo = $sexo;  <br/> 
                }<br/>
                <br/>
                // Metodos<br/>
               function verInfo(){<br/>
                    echo " Nombre: ", $this->nombre;<br/>
                    echo " Raza: ", $this->raza;<br/>
                    echo " Color: ".$this->color;<br/>
                    echo " Sexo: ".$this->sexo;<br/>
               }<br/>
               function ladra(){<br/>
                    echo $this->nombre, " dice guau ";<br/>
               }<br/>
            <br/>  
            // Creación de objeto tom, instancia de Perro<br/>
            $tom = new Perro ("Tom", "Spainel bretón","Negro y blanco","Macho");<br/>
           
            <br/>  
            // Invocación de métodos<br/>
            $tom->verInfo();<br/>
            $tom->ladra();<br/>


        ?&gt;              
        </code>
    </section> 
    
    
    <section>
        <h2>Resultado interpretado</h2>
        <?php
            class Perro {
               // Datos: Propiedades publicas
               private $nombre;        
               private $raza;
               private $color;
               private $sexo;
               
               //constructor
                function __construct($nombre,$raza,$color,$sexo) {
                            $this->nombre = $nombre;
                            $this->raza = $raza;
                            $this->color = $color;
                            $this->sexo = $sexo;   
                }

                // Metodos
               function verInfo(){
                    echo "<p> Nombre: ", $this->nombre, "</p>";
                    echo "<p> Raza: ", $this->raza, "</p>";
                    echo "<p> Color: ".$this->color,"</p>";
                    echo "<p> Sexo: ".$this->sexo,"</p>";
               }
               function ladra(){
                    echo "<p> ",$this->nombre, " dice guau </p>";
               }
            }

            // Creación de objeto tom, instancia de Perro
            $tom = new Perro ("Tom", "Spainel bretón","Negro y blanco","Macho");
            
            // Invocación de métodos
            $tom->verInfo();
            
            $tom->ladra();

           

            
        ?> 
    </section>

</body>
</html>