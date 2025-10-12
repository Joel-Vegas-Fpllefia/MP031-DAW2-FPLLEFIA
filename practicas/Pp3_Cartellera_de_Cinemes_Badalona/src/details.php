<?php

include("../data/data_philms.php");

function data_philm(){
    global $peliculas;
    echo '
    
      <img src="'.$peliculas[$_GET["id"]]["imatge"].'" alt="Una batalla tras otra" class="poster">

      <div class="info">
        <h1 class="title">'.$peliculas[$_GET["id"]]["nom"].'</h1>

        <p class="description">'.$peliculas[$_GET["id"]]["sinopsi"].'</p>

        <p><strong>Durada'.$peliculas[$_GET["id"]]["durada"].'</strong> </p>
        <p><strong>Director:</strong>'.$peliculas[$_GET["id"]]["director"].'</p>
        <p><strong>Actors:</strong>'.recorrer_list($peliculas[$_GET["id"]]["repartiment"]).'</p>
        <p><strong>Qualificació:'.$peliculas[$_GET["id"]]["qualificacio"].'</strong> </p>
        <p><strong>Gènere:</strong>'.$peliculas[$_GET["id"]]["genere"].'</p>

        <div class="schedule">
          <span class="label">ATMOS</span>
            '.recorrer_horario($peliculas[$_GET["id"]]["horaris"]).'
        </div>

        <a href="'.$peliculas[$_GET["id"]]["trailer"].'" target="_blank" class="trailer-btn">🎬 TRÀILER</a>
    </div>';
}

function recorrer_list($datos){
    $datos_html = '';
    foreach($datos as  $data){
        $datos_html.= ' '.$data.', ';
    }
    return $datos_html;
}

function recorrer_horario($datos){
    $horas = '';
    foreach($datos as $hora){
        $horas .= '<button class="hour">'.$hora.'</button>';
    }
    return $horas;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalls de la pel·lícula</title>
  <link rel="stylesheet" href="../style/details.css">
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php include("../components/header.php"); ?>
  <main class="movie-details">
    <div class="movie-container">
        <?php data_philm(); ?>
    </div>
  </main>
</body>
</html>
