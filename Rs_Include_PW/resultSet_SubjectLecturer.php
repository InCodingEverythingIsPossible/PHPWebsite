<?php
    
    include '../DB_Include_PW/db.php';
    $conn = new mysqli($serwer, $username, $password, $database);

    $query = "SELECT * FROM subject_PW";
    $rsSubject = $conn->query($query);
    $numSubject = $rsSubject->num_rows;
    
    $query = "SELECT * FROM lecturer_PW";
    $rsLecturer = $conn->query($query);
    $numLecturer = $rsLecturer->num_rows;
    
    $conn->close();
 
 ?>