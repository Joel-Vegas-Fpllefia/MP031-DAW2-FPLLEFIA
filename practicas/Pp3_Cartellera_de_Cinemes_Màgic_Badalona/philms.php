<?php
    include('src/data_phims.php');
    
    function creat_div(){
        global $peliculas;
        foreach($peliculas as $pelicula){
            echo "<div class='pelicula'> <h1 class='ocult'> {$pelicula["nom"]} </h1>";
            echo "<img src='{$pelicula['imatge']}' class='visible'  alt='{$pelicula["nom"]}'>";
            echo "<p class='ocult'> Director: {$pelicula["director"]} </p>";
            echo "<ul class='ocult'>";
            show_timer($pelicula["horaris"]);
            echo "</ul>";
            echo "<p class='ocult'> Durada: {$pelicula["durada"]} </p>";
            echo "<p class='ocult'> Descripcio: </br> {$pelicula['sinopsi']} </p>";
            echo " </div>";
        }
    }

    function show_timer($pelicula_list_time){
        foreach ($pelicula_list_time as $time){
            echo "<li> <p> [ $time ] </p> </li>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<style>
    h1{
        text-align: center;
    }
    hr{
        margin-bottom: 10px;
    }

    #peliculas{
        display: grid;
        grid-template-columns: repeat(5, 1fr); 
        gap: 10px; 
        align-items: center;
        justify-content: center;
        margin-left: 100px;
    }
    .pelicula{
        width: 300px;
        height: 600px;
        border: 1px solid black;
        border-radius: 32px;
        text-align: center;
    }

    .pelicula:hover .visible{
        visibility: hidden;
    }    
    .pelicula:hover .ocult{
        visibility: visible;
    }
    .ocult{
        visibility: hidden;
        position: relative;
    }

    ul{
        list-style: none;
        display: flex;
    }
    div >  h1{
        font-size: 20px;
    } 
    div > img{
        border-radius:16px;
        width: 280px;
        height: 300px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cartelera de No Cine</h1>
    <hr>
    <div id="peliculas">
        <?php  creat_div() ?>
    </div>
    
    
</body>
</html>