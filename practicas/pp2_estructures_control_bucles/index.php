<!-- Array con los nombre de los ejercicios  (ruta)-->
<!-- PONER BONITO INDICE -->
<?php
   $name_activit = [
        [
            "nombre" => "Nombres_parells_entre_50_i_500",
            "url" => "Exercici_1_:_Nombres_parells_entre_50_i_500/index.php"  
        ],
        [
            "nombre" => "Taules_de_multiplicar",
            "url" => "Exercici_2_:_Taules_de_multiplicar/index.php"   
        ],
        [
            "nombre" => "Nombre_aleatori_parell_o_senar",
            "url" => "Exercici_3_:_Nombre_aleatori_parell_o_senar/index.php"
        ],
        [
            "nombre" => "Divisors_d_un_nombre_i_verificacio_de_nombre",
            "url"   => "Exercici_extra_1_Divisors_d_un_nombre_i_verificacio_de_nombre/index.php"
        ],
        [
            "nombre" => "Exercici_extra_2_L_home_del_temps",
            "url"   =>  "Exercici_extra_2_L_home_del_temps/index.php"
        ]
    ];

   function print_name_activity($name_activit){
    for($activity = 0;$activity < count($name_activit);  $activity ++){
        echo "
            <p> Ejercicio ".$activity."</p>
            <a href='".$name_activit[$activity]["url"]."'>".$name_activit[$activity]["nombre"]."</a><br>";
    }
   }; 
   
?>

<style>
    *{
        margin: 0px auto;
    }

    div{
        width: 450px;
        border: 1px solid black;
        border-radius: 3px;
        margin-top: 10px;
    }
    p{
        margin-top: 10px;
        font-style: italic;
        font-size: 14px;
        margin-left: 5px;
    }

    a{
        margin-left: 25px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div>
            <h1>Pp2. Estructures de bucles i condicionals</h1>
            <?php 
                print_name_activity($name_activit);
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>