<?php
    $i=0;

    while ($i< $numSubject) {
        
        $rsLecturer->data_seek($i);
        
        $row = $rsLecturer->fetch_assoc();
        
        echo "<option value=".$row["lecturer_id"].">".$row["lecturer_name"]."</option>";
        
        $i++;
    }

?>