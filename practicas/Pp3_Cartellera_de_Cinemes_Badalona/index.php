<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php 
        include("./components/header.php");
        include("./src/main.php");
    ?>
    <main>
        <!-- Cards = Conjunto de todas las tarjetas -->
        <div id="Cards">
            <!-- Card = Tarjeta -->
            <?php load_target();?>
        </div>
    </main>
</body>
</html>