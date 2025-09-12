<?php 

function    say_hellow($name){
    echo    "Hello $name !";
}

function    footer_good_bye($teacher_name){
    echo    "Good   Bye $teacher_name";
}

function	date_to_day(){
	echo date("Y:m:H");
}

?>


<html>
    <head>
        <title> Joel Vegas Romero </title>
    </head>
    <body>
        <?php
            say_hellow("Joel Vegas Romero");
        ?>
    </body>

    <footer>
        <p>
            <?php
                footer_good_bye("Albert :) ");
				date_to_day();
                
            ?>
        </p>
    </footer>
</html>