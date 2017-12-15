<?php
            //conecto a la base de datos agenda con el usuario pepito:password2017
                
            $db = new mysqli('localhost', 'pepito', 'password2017', 'agenda');

            if($db->connect_error) {
                echo "<p>ERROR de conexión:".$db->connect_error."</p>";
                exit();
            } else {echo "<p>Conexión establecida.</p>";}

            
            $consultaPre = $db->prepare("SELECT * FROM persona WHERE dni = ?");   
        
            $consultaPre->bind_param('s', $_GET["dni"]);    

            $consultaPre->execute();
            $resultado = $consultaPre->get_result();

            if ($resultado) {
                
                echo "<p>Los datos de la persona borrada son:</p> ";
                while($row = $resultado->fetch_assoc()) {
                    $id = $row['id'];
                    echo  $row['dni']." ".$row['nombre']."  ". $row['apellidos'] . "</p>"; 
                }
                
            } else {
                echo "Sin resultados";
            }

            //se realiza el borrado
           

            $consultaPre = $db->prepare("DELETE FROM persona WHERE id = ?");   
        
            $consultaPre->bind_param('i', $id);    

            $consultaPre->execute();
            


            $consultaPre->close();
            
            $db->close();
            
?>
