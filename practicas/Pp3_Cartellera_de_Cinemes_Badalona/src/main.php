<?php
include("data/data_philms.php");

function load_target() {
    // Preguntar por que es Global 
    global $peliculas;

    foreach ($peliculas as $index => $pelicula) {
        echo '<div class="card">
                    <a class="philm" href="' . $pelicula['trailer'] . '" target="_blank">
                        <img src="' . $pelicula['imatge'] . '" alt="">
                        <h1>' . $pelicula['nom'] . '</h1>
                        <p>'.extract_horarios($pelicula['horaris']).'</p>
                    </a>

                    <form action="./src/details.php" method="get">
                        <input type="hidden" name="id" value="'.$index.'">
                        <input type="submit" name="campo" value="Ver Detalles">
                    </form>

                </div>';
    }
}

function extract_horarios($pelicula){
    $html_horario = '';
    foreach($pelicula as $horario){
        $html_horario.= ' '.$horario.' ';
    }
    return $html_horario;
}
?>
