<?php

//Primera classe con sesiones
session_start();

$_SESSION['USER'] = 'maria';
$_SESSION['ROLE'] = 'admin';

echo 'Session iniciada con exito';
echo '<br>';
echo  'Usuario: '. $_SESSION['USER'];
echo '<br>';
echo  'ROL: '. $_SESSION['ROLE'];

?>