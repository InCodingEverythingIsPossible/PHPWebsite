<?php
    $i=0;

    while ($i< $num) {
        $rs->data_seek($i);
        $row = $rs->fetch_assoc();
    
        echo "<tr>";
        echo "<td>".$row["lecture_id"]."</td>";
        echo "<td>".$row["discipline_name"]."</td>";
        echo "<td>".$row["subject_name"]."</td>";
        echo "<td>".$row["lecturer_name"]."</td>";
        echo "</tr>";
        
        $i++;
    }
?>