<?php 
// Simple
    $dies = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
    echo $dies[0]; // Lunes
    echo $dies[2]; // Martes


    $dies[] = 'Sabado';
    // Añadir un Elemento al Final
    array_push($dies, 'Domingo');

    // Eliminar el Último Elemento
    array_pop($dies); // Elimina 'domingo'

    // Recorrer con Foreach
    foreach($dies as $dia){
        echo "<h1>$dia</h1>";
    }
?>
