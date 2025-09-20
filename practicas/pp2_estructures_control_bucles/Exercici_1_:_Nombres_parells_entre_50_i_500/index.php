<?php 
    function numbers_par ($min_number, $max_number){
        for($number = $min_number; $number <= $max_number; $number++){
            if($number%2 == 0){echo "<div> ".$number."</div>";}
        }
    };
?>

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
        <?php numbers_par(50,500) ?>
    </main>
</body>
</html>