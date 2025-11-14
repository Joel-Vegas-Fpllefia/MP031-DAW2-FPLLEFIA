<?php 
    include('db/config.php');
    
    

    function returnDataUsers($mysqli){
        $users = $mysqli->query("SELECT * FROM usuaris");
        $resultUsers = $users->fetch_all(MYSQLI_ASSOC);
        return $resultUsers;
    }