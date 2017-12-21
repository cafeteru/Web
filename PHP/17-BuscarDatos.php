<?php
//conecto a la base de datos agenda con el usuario pepito:password2017

$db = new mysqli('localhost', 'pepito', 'password2017', 'agenda');

if ($db->connect_error) {
    echo "<p>ERROR de conexión:" . $db->connect_error . "</p>";
    exit();
} else {
    echo "<p>Conexión establecida.</p>";
}


$consultaPre = $db->prepare("SELECT * FROM persona WHERE dni = ?");

$consultaPre->bind_param('s', $_GET["dni"]);

$consultaPre->execute();
$resultado = $consultaPre->get_result();

if ($resultado) {
    // Mostrar los datos en un lista
    echo "<p>Datos de la persona con DNI: " . $_GET["dni"] . "</p>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<p>" . $row['nombre'] . "  " . $row['apellidos'] . "</p>";
    }

} else {
    echo "Sin resultados";
}


$consultaPre->close();

$db->close();

?>
