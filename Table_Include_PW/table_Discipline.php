<?php
    $i=0;

    while ($i< $num) {
        $rs->data_seek($i);
        $row = $rs->fetch_assoc();
        
        echo "<tr>";
        echo "<td>".$row["discipline_id"]."</td>";
        echo "<td>".$row["discipline_name"]."</td>";
        echo "</tr>";
        
        $i++;
    }
?>