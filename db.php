<?php //conecatandome a phpmyadmin
    
    session_start();
    $conn = mysqli_connect(
        'localhost',// dominio  
        'root', // usuario
        '', // contraseña
        'php-crud' // bd 
    );

?>