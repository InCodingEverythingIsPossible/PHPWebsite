<?php

    $entry = TRUE;
    
    if (isset($_POST['lecturer_name'])) {
        $lecturer_name = $_POST['lecturer_name'];
    } else{
        $entry = FALSE;
    }
?>