<?php
$list_number_aleat = [];

function complete_rand_list($number){
    global $list_number_aleat;

    for($position = 0; $position < $number ; $position ++){
        $list_number_aleat[$position] = rand_number();
    }

    travel_for($list_number_aleat);
}

function travel_for($data){
    # Propiedades
    $min_number = $data[0];
    $max_number = $data[0];
    $total_number = $data[0];
    $amount_par = 0;
    $amount_in = 0;

    # Recorremos todas las posiciones del Array
    for($position = 0; $position < count($data); $position ++){
        show_number($data[$position]); # Funcion que mostrar dependiendo del numero q sea 

        # Calculo de Numeros
        $min_number = trove_min_number($data[$position],$min_number);
        $max_number = trove_max_number($data[$position],$max_number);
        $total_number += $data[$position];

        # Validacion de Par Inpar
        if($data[$position]%2 == 0){$amount_par++;}else{$amount_in++;}
          
    }
    echo "<p> El numero mas pequeño es: ".$min_number."</p>";
    echo "<p> El numero mas grande es: ".$max_number."</p>";
    echo "<p> La Media es:". round(($total_number/33),2)."</p>";  
    echo "<p> Cantidad de Pares: ".$amount_par."</p>";
    echo "<p> Cantidad de Impares: ".$amount_in."</p>";
    
}

function rand_number(){
    return rand(0,100);
}

function show_number($number){
    if ($number < 33){ echo "<div style='background-color:blue'>".$number."</div>";}
    else if ($number >= 33 AND $number < 66) {echo "<div style='background-color:grey'>".$number."</div>";}
    else if ($number >= 66) {echo "<div style='background-color:green'>".$number."</div>";}
}

function trove_min_number($number,$min_number){
    if ($min_number > $number){ return $number;}else{return $min_number;}
}

function trove_max_number($number,$max_number){
    if ($max_number < $number){ return $number;}else{return $max_number;}
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
    <?php complete_rand_list(100) ?>
</body>
</html>