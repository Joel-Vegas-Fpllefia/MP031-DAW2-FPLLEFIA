<?php
session_start();

// Si no existe = isset()
if(isset($_SESSION['personajes'])){
    $_SESSION['personajes'] = 
    [
        "nombre" => "Tony Stark",
        "imagen" => "https://play.google.com/store/movies/details/Iron_Man?id=83jaTJNvI54&hl=es_VEhttps://macguffin007.com/wp-content/uploads/2018/02/Iron-Man-2008.jpg",
        "poder" => "Genio Tecnologico",
        "descripcion" => "Tony Stark en modo Robot"
    ];
}


// Funcion para añadir personaje (Creat en DB)
function agregar_personaje($nombre,$img,$poder,$descripcion){
        array_push($_SESSION['personajes'],
        [
            "nombre" => $nombre,
            "imagen" => $img,
            "poder" => $poder,
            "descripcion" => $descripcion
        ]
    );
}

// Funcioni Editar Personaje
function editar_personaje($id,$nombre,$img,$poder,$descripcion){
    // comprobamos id
    if(isset($_SESSION['personajes'][$id])){
        $_SESSION['personajes'][$id]= [
            "nombre" => $nombre,
            "imagen" => $img,
            "poder" => $poder,
            "descripcion" => $descripcion
        ];
    }    
}


?>