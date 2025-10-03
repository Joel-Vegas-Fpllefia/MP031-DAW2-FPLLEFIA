<?php
include('usuarios/usuarios.php');

echo "<br>";
echo $usuarios['user'];

    if(isset($_POST['nom']) && $_POST['passwd']){
        $usuario_validate = FALSE;
        foreach ($usuarios as $usuario){
            echo $usuario['user']."-".$_POST['nom'];
            if($usuario['user'] == $_POST['nom'] && $usuario['passwd'] == $_POST['passwd']){
                $usuario_validate = TRUE;
                break;
            } 
        } 
        if($usuario_validate == true){
            echo "El Usuario ya existe";
        }else{
            echo "Inicio session Correcto";
        }
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
    <form action="index.php" method="post">
        <input type="text" name="nom">
        <input type="password" name="passwd">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
