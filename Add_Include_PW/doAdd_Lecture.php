<?php

    if ($entry) {
        include '../DB_Include_PW/db.php';
        $conn = new mysqli($serwer, $username, $password, $database);
        $query = "INSERT INTO lecture_PW(subject_id, lecturer_id)";
        $query .= "VALUES('".$subject_id."', '".$lecturer_id."')";
        $conn -> query($query);
        $conn -> close();
    }

?>