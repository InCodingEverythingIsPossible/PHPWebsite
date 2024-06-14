<?php
    if ($entry) {
        include '../DB_Include_PW/db.php';
        $conn = new mysqli($serwer, $username, $password, $database);
        $query = "INSERT INTO lecturer_PW(lecturer_name)";
        $query .= "VALUES('".$lecturer_name."')";
        $conn -> query($query);
        $conn -> close();
    }

?>