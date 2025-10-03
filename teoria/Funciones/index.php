<?php
function sum($a, $b){
    return $a + $b;
}
echo sum(2,3);

function generarSaludo($nombre){
    return "<h1> HOLA, ".$nombre."!</h1>";
}

echo generarSaludo("Joel");

function calcaularToral ($precio,$cantidad,$impuestos){
    $subtotal = $precio + $cantidad;
    $total = $subtotal + ($subtotal + $impuestos/100);
    return $total."<br>";
}
echo calcaularToral(100,2,21);

$palabras = [
    "hola",
    "mundo",
    "desde",
    "PHP"
];
# implode pasa de ARRAY a STRING
$palabras_implode = implode(",",$palabras);
print_r($palabras_implode);

$cadena = "Hola, mundo , desde ,php";
$palabras_explode = explode(",",$cadena);
echo "<br>";
print_r($palabras_explode);

?>