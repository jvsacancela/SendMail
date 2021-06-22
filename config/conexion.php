<?php 

    define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'root');
    define ('CLAVE', '');
    define ('BDD', 'sendmailbd');

    $conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BDD) or die ('Error motherfucker >:v');

?>