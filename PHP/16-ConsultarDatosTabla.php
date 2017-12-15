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
    
    <h1>16-Consultar Datos</h1>
    <section>
        <h2>Resultado interpretado</h2>  
        
        <p>Consulta de los valores de la tabla persona de la Base de datos</p>
        
    <?php
         // Conexión al SGBD local con XAMPP con el usuario creado pepito:password2017 y bbdd agenda
            $db = new mysqli('localhost','pepito','password2017','agenda');
                         
            if($db->connect_error) {
                echo "<p>ERROR de conexión:".$db->connect_error."</p>";
                exit();
            } else {
                echo "<p>Conexión establecida.</p>";
            }
        
           //consultar la tabla persona
            $resultado =  $db->query('SELECT * FROM persona');
                 
            if ($resultado->num_rows > 0) {
                // Mostrar los datos en un lista
                echo "<p>Los datos en la tabla persona son: </p>";
                echo "<ul>";
                while($row = $resultado->fetch_assoc()) {
                    echo "<li>". $row['dni']."  ". $row['nombre']."  ". $row['apellidos'] ."</li>"; 
                }
                echo "</ul>";
            } else {
                echo "Sin resultados";
            }
           
        //cerrar la conexión
        $db->close();    
       

        ?> 

    </section>

</body>
</html>