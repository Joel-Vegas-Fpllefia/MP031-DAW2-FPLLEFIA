<?php
    echo "{$_GET['nom']}"; 

    //isset: lo usamos para comprobar que existe un parametro con ese nombre
    if(isset($_GET['nombre'])){
        echo $_GET['nombre'];
    }else{
        echo ' El parametro no existe con el campo nombre';
    } 


    if(isset($_GET['nom'])){
        $n = $_GET['nom'];
        echo $n;
    }else{
        echo ' El parametro no existe con el campo nombre';
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina 2</h1>
</body>
</html>