<!-- 
 Numero Aleatorio 
 Recorrer todos los numero del 1 al x 
 Comprobar si son divisores = guardar en un array 
 Comprobar si es un numero primo si el array es 2 
-->

<?php

$numbers_divisors = [];

function number_aleat(){
    return rand(1,100);
}

function extract_divisor_of_numbers(){
    global $numbers_divisors;
    $number = number_aleat();
    for($position_list = 0,$number_probe = 1; $number_probe <= $number; $number_probe++){
        if($number%$number_probe == 0)
            {
                $numbers_divisors[$position_list] = $number_probe;
                $position_list++;
            }  
    }
    show_results($number);
}

function show_results($number){
    global $numbers_divisors;

    echo    "<h2> Nombre generat: ".$number."</h2>";
    echo    "<p> Divisor de ".$number.":</p>";
    echo    "<div id='list_numeros_divisores'>";
    for($show_numbers_list = 0; $show_numbers_list < count($numbers_divisors); $show_numbers_list++){
        echo "<div class='numeros_divisores'> <p>".$numbers_divisors[$show_numbers_list]."</p> </div>";
    }
    echo    "</div>";
    if(count($numbers_divisors) != 2){echo"<p class='noPrimer'>".$number." no es un nombre primer </p>";}
    else{echo"<p class='primer'>".$number." es un nombre primer</p>";}
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    *{
        text-align: center;
        margin: 0px auto;
    }
    #contenido{
        width: 500px;
        margin-top: 20px;
        background-color: beige;
        border: 1px solid blue;
        border-radius: 3px;
    }
    #list_numeros_divisores{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .numeros_divisores{
        width: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: aquamarine;
        border: 1px solid blue;
    }

    .primer{
        color: green;
    }
    .noPrimer{
        color: red;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="contenido">
        <?php  extract_divisor_of_numbers() ?>
    </div>
</body>
</html>