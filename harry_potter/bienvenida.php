<?php
 include('./casas.php');
 $casa_aleat =  array_rand($casas_info);
 


 function casa($casa){
    echo $casa;
 }

 function bienvenido($casa_aleat,$casas_info){
        echo $casas_info[$casa_aleat]['welcome_message'];
 }

 function logo($casa_aleat,$casas_info){
     return $casas_info[$casa_aleat]['image'];
 }
 function nombre(){
    echo $_POST['usuario']; echo $_POST['apellidos'];
 }

 function color($casa_aleat,$casas_info){
    echo $casas_info[$casa_aleat]['text_color'];
 }
 function welcome_message($casa_aleat,$casas_info){
    echo $casas_info[$casa_aleat]['welcome_message'];
 }

 function message_background($casa_aleat,$casas_info){
    echo $casas_info[$casa_aleat]['message_background'];
 }
?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="bienvenida.css" rel="stylesheet">
<style>
    /* Estilos generales */
body {
  margin: 0;
  padding: 0;
  font-family: 'Cinzel', 'Times New Roman', serif;
  color: <?php ?>;
  background-color: <?php welcome_message($casa_aleat,$casas_info) ?>; /* color Gryffindor por defecto */
  text-align: center;
}

/* Contenedor principal */
.container {
  max-width: 900px;
  margin: 50px auto;
  background-color: <?php  message_background($casa_aleat,$casas_info) ?>;
  border-radius: 12px;
  padding: 40px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
}

/* Encabezado principal */
h1 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 20px;
}

/* Submensaje de bienvenida */
.welcome-message h1 {
  font-size: 1.8rem;
  font-weight: 600;
  margin-bottom: 15px;
  color: <?php color($casa_aleat,$casas_info) ?>;
}

/* Imagen del escudo */
.welcome-message img {
  max-width: 250px;
  margin-top: 20px;
  transition: transform 0.3s ease;
}

.welcome-message img:hover {
  transform: scale(1.1);
}

/* Animación de aparición */
.container {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Colores de cada casa (puedes cambiar dinámicamente en PHP si quieres) */
.gryffindor {
  background-color: #740001;
  color: #FFD700;
}

.hufflepuff {
  background-color: #FFDB00;
  color: #60605B;
}

.ravenclaw {
  background-color: #0E1A40;
  color: #946B2D;
}

.slytherin {
  background-color: #1A472A;
  color: #AAAAAA;
}

</style>
</head>
<body>
<div class="container text-center">
<h1>¡Benvingut <?php nombre(); ?>  a <?php casa($casa_aleat); ?></h1>
<div class="welcome-message mt-4">
 <h1><?php bienvenido($casa_aleat,$casas_info) ?></h1>
 <img src="<?php echo logo($casa_aleat, $casas_info); ?>" alt="Escut de la casa <?php casa($casa_aleat); ?>" style="max-width: 250px; margin-top: 20px;">
</div>
</div>
</body>
</html>