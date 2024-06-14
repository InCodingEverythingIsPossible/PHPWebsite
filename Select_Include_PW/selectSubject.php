<?php
    $i=0;

    while ($i< $numSubject) {
        
        $rsSubject->data_seek($i);
        
        $row = $rsSubject->fetch_assoc();
        
        echo "<option value=".$row["subject_id"].">".$row["subject_name"]."</option>";
        
        $i++;
    }

?>