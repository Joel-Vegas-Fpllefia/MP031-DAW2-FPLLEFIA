<?php

function random_number(){
    return rand(0,100);
}

function number_par_inpar($number){
    if($number%2 == 0){echo "<div id='number_div' class='par'>".$number."</div>";indicate_value_number($number,"par");}
    else{echo "<div id='number_div' class='inpar'>".$number."</div>";indicate_value_number($number,"inpar");}
}

function indicate_value_number($number,$type_number){
    echo "<p> El numero $number es: ".$type_number."</p>";
}
?>

<style>
    *{
        margin: 0px auto;
    }
    p{
        font-size: 15px;
        text-align: center;
        margin-top: 10px;
    }
    #number_div{
        width: 40px;
        height: 40px;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }
    .par{
        background-color: aquamarine;
    }

    .inpar{
        background-color: yellow;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php number_par_inpar(random_number()) ?>
    </main>
</body>
</html>