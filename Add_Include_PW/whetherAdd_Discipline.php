<?php

    $entry = TRUE;
    
    if (isset($_POST['discipline_name'])) {
        $discipline_name = $_POST['discipline_name'];
    } else{
        $entry = FALSE;
    }
?>