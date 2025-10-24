<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_SESSION['libros'])){add_or_edit(); }
    else{header("Location: home.php");}
}

function add_or_edit(){
    if(isset($_GET['id'])){edit_book($_GET['id']);}
    else{add_book();}
}

function edit_book($id){
    // Añadir los campos nuevos que deberemos recoger con el $POST
    $_SESSION['libros'][$id]['titulo'] = $_POST['titulo'];
    $_SESSION['libros'][$id]['autor'] = $_POST['autor'];
    $_SESSION['libros'][$id]['img'] = $_POST['img'];
    $_SESSION['libros'][$id]['descripcion'] = $_POST['descripcion'];
}

function add_book(){
    $new_book = [
        "titulo" => $_POST['titulo'],
        "autor" => $_POST['autor'],
        "descripcion" => $_POST['descripcion'],
        "img" => $_POST['img']
    ];

    array_push($_SESSION['libros'],$new_book);
}

header("Location: home.php");

?>