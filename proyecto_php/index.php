<?php
    include('data.php');

    $resultado = returnDataUsers($mysqli);

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID </th>
            <th>Nombre </th>
            <th> Email </th>
            <th> Rol </th>
          </tr>";

    foreach($resultado as $user){
        echo "<tr>";
        echo "<td>". $user['id']."</td>";
        echo "<td>". $user['nom']."</td>";
        echo "<td>". $user['email']."</td>";
        echo "<td>". $user['rol']."</td>";
        echo "</tr>";
    }
?>