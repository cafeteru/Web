<?php
try {
    $db = new mysqli('localhost', 'pepito', 'password2017');

    if ($db->connect_error) {
        echo "<h2>ERROR de conexión:" . $db->connect_error . ". No existe el usuario</h2>";
        exit();
    } else {
        echo "<h2>Conexión establecida.</h2>";
    }
} catch (\mysql_xdevapi\Exception $e) {
    echo '<p>sdfsdfd</p>';
}
