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
    
    <h1>14-Base de Datos MySQLi</h1>
        
    <section>
        <h2>Resultado interpretado</h2>
        <p>Se crea la base de datos AGENDA con la tabla</p> 
        <ul>
            <li>Persona (id, DNI, Nombre, Apellidos)</li>
        </ul>
        <?php
           
          
            // Conexión al SGBD local con XAMPP con el usuario creado pepito:password2017
            $db = new mysqli('localhost','pepito','password2017');
                         
            if($db->connect_error) {
                echo "<p>ERROR de conexión:".$db->connect_error.". No existe el usuario</p>";
                exit();
            } else {echo "<p>Conexión establecida.</p>";}
        
            // Creo la base de datos de trabajo "agenda" utilizando ordenación en español
            $cadenaSQL = "CREATE DATABASE IF NOT EXISTS agenda COLLATE utf8_spanish_ci";
            if($db->query($cadenaSQL) === TRUE){
                echo "<p>Base de datos AGENDA creada con éxito (o ya existe)</p>";
            } else { 
                echo "<p>ERROR en la creación de la Base de Datos AGENDA</p>";
                exit();
            }
           
            //selecciono la base de datos AGENDA para utilizarla
            $db->select_db("agenda");

            //Crear la tabla persona DNI, Nombre, Apellido
            $crearTabla = "CREATE TABLE IF NOT EXISTS persona (id INT NOT NULL AUTO_INCREMENT, 
                        dni VARCHAR(9) NOT NULL,
                        nombre VARCHAR(255) NOT NULL, 
                        apellidos VARCHAR(255) NOT NULL,  
                        PRIMARY KEY (id))";
            
           
            if($db->query($crearTabla) === TRUE){
                echo "<p>Tabla PERSONA creada con éxito (o ya existe)</p>";
             } else { 
                echo "<p>ERROR en la creación de la tabla PERSONA</p>";
                exit();
             }   
        //cerrar la conexión
        $db->close();    
        ?> 
    </section>

</body>
</html>