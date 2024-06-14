<?php

    $entry = TRUE;
    
    if (isset($_POST['subject_name']) and isset($_POST['discipline_id']) and isset($_POST['subject_hours'])) {
        $subject_name = $_POST['subject_name'];
        $discipline_id = $_POST['discipline_id'];
        $subject_hours = $_POST['subject_hours'];
    } else{
        $entry = FALSE;
    }
?>