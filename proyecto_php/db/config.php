<?php
    $host = "mysql-joelvegasromero.alwaysdata.net";
    $username = "439220";
    $password = "Ju94714016*";
    $dbname = "joelvegasromero_social_schools_network";


    // Creamos el objeto de DB
    $mysqli = new mysqli($host,$username,$password,$dbname);

    // -> es como acceder con . a un methodo
    if($mysqli->connect_errno){
        die("Error de conexion: ". $mysqli -> connect_errno);
    }else{
        echo "Conexion Exitosa";
    }

    // Metacharset para los accentos
    //$mysqli -> set_charset()
?>