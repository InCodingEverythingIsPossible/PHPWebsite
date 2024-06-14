<?php
    if ($entry) {
        include '../DB_Include_PW/db.php';
        $conn = new mysqli($serwer, $username, $password, $database);
        $query = "INSERT INTO discipline_PW(discipline_name)";
        $query .= "VALUES('".$discipline_name."')";
        $conn -> query($query);
        $conn -> close();
    }

?>