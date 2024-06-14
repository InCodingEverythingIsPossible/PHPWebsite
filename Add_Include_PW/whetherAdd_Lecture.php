<?php

    $entry = TRUE;
    
    if (isset($_POST['lecturer_id']) and isset($_POST['subject_id'])) {
        $lecturer_id = $_POST['lecturer_id'];
        $subject_id = $_POST['subject_id'];
    } else{
        $entry = FALSE;
    }
?>