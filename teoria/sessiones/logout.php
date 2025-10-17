<?php 
    session_start();

    // Eliminamos el role
    unset($_SESSION['ROLE']);


    // Eliminamos el armario
    session_destroy();

    // Redireccionar web
    header('Location: index.php');
    exit();
?>