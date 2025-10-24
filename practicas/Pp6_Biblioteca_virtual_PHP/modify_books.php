<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(!isset($_SESSION['libros'])){header("Location: home.php");}
    else{add_or_edit();}
}

function add_or_edit(){
    if(isset($_POST['id'])){edit($_POST['id']);}
    else{}
}

function edit($id){
    // Añadir los campos nuevos que deberemos recoger con el $POST
    $_SESSION['libro'][$id][];
}

?>