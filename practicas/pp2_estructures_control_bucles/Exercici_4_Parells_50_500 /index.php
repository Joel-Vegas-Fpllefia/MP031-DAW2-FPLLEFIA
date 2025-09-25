<?php

function travel_for ($min_number, $max_number){
    # Propiedades
    $num_in_tens = 0;
    $total_sum_tens = 0;
    $total_pars = 0;
    $total_sum_pars = 0;

    for($tens = 0; $min_number < $max_number; $min_number ++){
        echo "<div class='lista_decenas'> <h1> Del ".$min_number." al ".($min_number + 10)."</h1>";
        for ($tens = 0; $tens < 10; $tens++){
            if($min_number%2 == 0){
                validate_multiple($min_number);
                $num_in_tens ++;
                $total_sum_tens += $min_number;
            }
            $min_number ++;
        }
        echo "<p> Cantidad Total es ". $num_in_tens." y la suma de ellos es: ".$total_sum_tens."</p>";
        $min_number --;
        
        $total_pars += $num_in_tens;
        $total_sum_pars += $total_sum_tens;

        $num_in_tens = 0; 
        $total_sum_tens = 0;
    }

    echo "<p> La cantidad total de numeros para ha sido de ".$total_pars." y la suma de ellos ha sido ".$total_sum_pars."</p>";
} 



function validate_multiple ($number){
    if(mult_four($number) == 0){ 
        if(mult_six($number) == 0){ # Multiples de Cuatro y Seis
            show_tens_number($number,"orangered");
        }else{
            show_tens_number($number,"aquamarine"); # Multples de Cuatro
        }
}else if(mult_six($number) == 0){
        show_tens_number($number,"blue"); # Multiples de Seis
    }else{
        show_tens_number($number,""); # Multiple de dos
    }
}
function mult_four($number){
    return $number%4;
}

function mult_six($number){
    return $number%6;
}
function show_tens_number ($number,$color){
    echo "<p style='background-color:".$color."'>".$number."</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .lista_decenas{
        width: 500px;
        height: 215px;
        margin-bottom: 10px; 
        margin-top: 250px;             /* espacio alrededor */
        border: 1px solid black;   /* borde negro */
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php travel_for(50,500) ?>
</body>
</html>