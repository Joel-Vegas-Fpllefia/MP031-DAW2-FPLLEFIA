<?php 
    session_start();


    if($_POST['usuario'] === 'Unai' && $_POST['contrasena'] === '1234'){
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contrasena'] = $_POST['contrasena'];
        $_SESSION['foto'] = $_POST['foto'];

        include("./lib/header.php");
    }else{
        header("Location: index.php");
    }


?>