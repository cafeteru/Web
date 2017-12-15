        <?php
            class Perro {
               // Datos: Propiedades publicas
               private $nombre;    
               private $raza;
               private $color;
               private $sexo;
               
               //get y set
               function __set($name, $value){
                $this->$name = $value;
                }//__set

                function __get($name){
                 return $this->$name;
                }//__get

              //constructor
              function __construct($nombre,$raza,$color,$sexo) {
                            $this->nombre = $nombre;
                            $this->raza = $raza;
                            $this->color = $color;
                            $this->sexo = $sexo;   
                }//constructor
                
                
                
                // Metodos
               function verInfo(){
                    echo"<p> Datos completos</p>";
                    echo"<p> ---------------</p>";
                    echo "<p> Nombre: ", $this->nombre, "</p>";
                    echo "<p> Raza: ", $this->raza, "</p>";
                    echo "<p> Color: ".$this->color,"</p>";
                    echo "<p> Sexo: ".$this->sexo,"</p>";
                    echo"<p> -------------</p>";
               }//verInfo
            
               function ladra(){
                    echo "<p> ",$this->nombre, " dice guau </p>";
               }//ladra

               //sobrecarga con el método __call
                // el metodo come 
                // come()  
                // come($comida) come un tipo de comida
                function __call($metodo, $argumentos){               
                    if($metodo == "come"){    
                      if (count($argumentos)==0){
                            echo "<p> ",$this->nombre, " come </p>";    
                       } else if(count($argumentos)==1){  
                           echo "<p> ",$this->nombre, " come ".$argumentos[0]. "</p>";
                      }
                    }
                }//__call
            }//clase
      
        ?> 
