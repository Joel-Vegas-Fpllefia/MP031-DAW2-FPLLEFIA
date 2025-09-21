<?php

$avg_list_temperature = [];
$total_temperature = 0;

function list_temperature(){
    global $avg_list_temperature,$total_temperature;
    $total_temperature = 0;
    for($city = 0; $city < 10; $city++){
         
        $avg_list_temperature[$city] = rand_number();  
        $total_temperature += $avg_list_temperature[$city];

        if($avg_list_temperature[$city] < 10){show_temperature($avg_list_temperature[$city],"Fred","fred");}
        elseif ($avg_list_temperature[$city] >= 10 AND $avg_list_temperature[$city] < 25){show_temperature($avg_list_temperature[$city],"Temperatura Suau","suau");}
        else{show_temperature($avg_list_temperature[$city],"Calor","calor");}
    };
}

function rand_number(){
    return rand(-10,40);
}

function show_temperature($temperature, $text,$class_name){echo"<div class='".$class_name."'> <h1>".$temperature." ºC</h1> <p>".$text."</p> </div>";}

function avg(){
    global $avg_list_temperature,$total_temperature;
    echo "<p> Mitajana de les temperatures".$total_temperature / count($avg_list_temperature)."</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .fred,.calor{
        color: white;
    }

    .calor{
        background-color: red;
    }

    .fred{
        background-color: blue;
    }

    .suau{
        background-color: yellow;
    }

    #list{
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    #list > div{
        text-align: center;
        border: 1px solid black;
        border-radius: 3px;
    }
    p{
        text-align: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="list"> <?php list_temperature() ?> </div>
    <?php avg()?>
</body>
</html>