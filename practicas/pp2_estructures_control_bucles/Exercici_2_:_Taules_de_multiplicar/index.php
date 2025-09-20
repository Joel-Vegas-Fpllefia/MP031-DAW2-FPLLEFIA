<?php
function multiplication_table ($max_number){
    for($table_number = 0; $table_number <= $max_number;  $table_number++){
        echo "<div>";
        for($number = 0; $number <= 10; $number++){
            echo "<p> $table_number * $number = " .$table_number*$number."</p>";
        };
        echo "</div>";
    };
}
?>

<style>
    main{
        display: flex;
        margin-right: 10px;
        width: 1200px;
    }

    div{
        width: 400px;
        display: inline;
        border: 1px solid black;
        border-radius: 3px;
        margin-right: 20px;
    }
    p{
        margin: 5px;
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
    <main> <?php multiplication_table(11)  ?> </main>
</body>
</html>