<?php

    include '../DB_Include_PW/db.php';

    $conn = new mysqli($serwer, $username, $password, $database);

    $query = "SELECT * FROM lecturer_PW";

    $rs = $conn->query($query);

    $conn->close();
    
    $num = $rs->num_rows;
 
?>