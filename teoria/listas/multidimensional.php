<?php
$alumnos = [
    [
        'name' => 'Juan',
        'surname' => 'Perez',
        'age' => 20,
        'curso' => 'Informatica',
        'inteligencia' => true
    ],
    [
        'name' => 'Maria',
        'surname' => 'Garcia',
        'age' => 22,
        'curso' => 'DAW1',
        'inteligencia' => false
    ],
    [
        'name' => 'Luis',
        'surname' => 'Lopez',
        'age' => 20,
        'curso' => 'Daw2',
        'inteligencia' => true
    ],
    [
        'name' => 'Juan',
        'surname' => 'Perez',
        'age' => 20,
        'curso' => 'Informatica',
        'inteligencia' => true
    ]
];

echo $alumnos."</br>";

foreach ($alumnos as $alumno){
    // foreach ($alumno as $clave => $valor){
    //     echo "<h1> $clave : $valor </h1>";
    // }
    echo "<h1> {$alumno["name"]} {$alumno["surname"]} </h1>"; 
    echo "<p> Edad: {$alumno["age"]} </p>";
    echo "<p> Curso: {$alumno["curso"]} </p>";
}

?>