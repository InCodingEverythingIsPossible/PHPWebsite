<?php
    if ($entry) {
        include '../DB_Include_PW/db.php';
        $conn = new mysqli($serwer, $username, $password, $database);
        $query = "INSERT INTO subject_PW(subject_name, discipline_id, subject_hours)";
        $query .= "VALUES('".$subject_name."', '".$discipline_id."', '".$subject_hours."')";
        $conn -> query($query);
        $conn -> close();
    }

?>