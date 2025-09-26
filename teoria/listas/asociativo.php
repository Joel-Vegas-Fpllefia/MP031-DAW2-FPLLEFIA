<?php
   $alumno = [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 21,
        "curso" => "DAW2",
        "Inteligente" => true
   ];
   echo "$alumno </br>" ;
   var_dump($alumno); // Para mostrar todo el array en detalle
   echo "</br>";
   print_r($alumno); // solo muestra el contenido del array, no entra en detalle

   echo "</br>".$alumno["nombre"]." ".$alumno["apellido"]."</br>";

   // Añadir un nuevo elemento
   $alumno['email'] = 'juan.perez@example.com';
   print_r($alumno);

   //recorrer con foreach
   foreach($alumno as $campo => $data){
    echo "<h1> $campo : $data </h1>";
   }
?>