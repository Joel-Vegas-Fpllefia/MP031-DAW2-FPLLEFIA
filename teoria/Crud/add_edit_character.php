<!-- Formulario para añadir o editar personaje -->

<?php
$session_start();
require_once "functions.php";

// Primer paso: comprobar si venimos para editar o para añadir 
$edit_mode = false; // Nos Dice si estamos editando o añadiendo
$id = null;
$nombre = $img = $poder = $descripcion = "";

// Si hay un ID en la URL estamos editando
if(isset($_GET['nombre'])){
    if(isset($_SESSION['personajes'][$nombre])){
        $edit_mode = true;
        $personaje = $_SESSION['personaje'][$nombre];

        $nombre = $_SESSION['nombre'];
        $img = $_SESSION['img'];
        $poder = $_SESSION['poder'];
        $descripcion = $_SESSION['descripcion'];
    }
}

// Segundo paso : Procesar el form (POST)
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $nombre = $_POST['nombre'];
    $img = $_POST['img'];
    $poder = $_POST['poder'];
    $descripcion = $_POST['descripcion'];
}

if($edit_mode){editar_personaje($id, $nombre,$img,$poder,$descripcion);}
else{agregar_personaje($nombre,$img,$poder,$descripcion);};
?>