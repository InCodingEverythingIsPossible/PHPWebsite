<?php
    
    include '../DB_Include_PW/db.php';
    $conn = new mysqli($serwer, $username, $password, $database);
    
    $query = " SELECT subject_PW.subject_id, subject_PW.subject_name, discipline_PW.discipline_name, subject_PW.subject_hours
                FROM subject_PW 
                LEFT JOIN discipline_PW 
                    ON discipline_PW.discipline_id = subject_PW.discipline_id ";
  
    
    $rs = $conn->query($query);
    
    $conn->close();
    
    $num = $rs->num_rows;
 ?>