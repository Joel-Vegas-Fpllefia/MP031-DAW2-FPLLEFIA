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

function	info_of_phpinfo(){
	echo "El phpinfo es una función la cual , nos muestra todo la información sobre la posible del lenguaje de programación PHP";
}
?>


<html>
    <head>
        <title> Joel Vegas Romero </title>
		<link rel="stylesheet" href="practicas/pp1-primera-app/src/style.css">
    </head>
    <body>
		<header>
			<img src="practicas/pp1-primera-app/img/fpllefia_logo.jfif">
			<h1> Módulo 7 - Práctica 1. Mi primera aplicación en PHP</h1>
		</header>

		<div>
			<img src="practicas/pp1-primera-app/img/a.jpg">
			<p>
				<?php
					say_hellow("Joel Vegas Romero");
				?>
			</p>
		</div>
		<p id="info_php"> 
			<?php
				info_of_phpinfo()
			?>
		</p>
        
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