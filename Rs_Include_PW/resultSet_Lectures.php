<?php
    
    include '../DB_Include_PW/db.php';
    $conn = new mysqli($serwer, $username, $password, $database);
    
    $query = " SELECT lecture_PW.lecture_id, discipline_PW.discipline_name, subject_PW.subject_name, lecturer_PW.lecturer_name
                FROM lecture_PW 
                LEFT join (discipline_PW, subject_PW, lecturer_PW) 
                    on (discipline_PW.discipline_id=subject_PW.discipline_id 
                    and subject_PW.subject_id=lecture_PW.subject_id 
                    and lecture_PW.lecturer_id=lecturer_PW.lecturer_id)";
  
    
    $rs = $conn->query($query);
    
    $conn->close();
    
    $num = $rs->num_rows;
 ?>