<?php
    $nav = '<nav><table>';
    $nav .= '<tr><td></td><td><a href ="Start_Wojciechowski.php">Main page</a></td></tr>';
    $nav .= '<tr>
                <td><a href="See_Discipline.php">See Discipline</a></td>
                <td><a href="See_Lecturer.php">See Lecturers</a></td>
                <td><a href="See_Lectures.php">See Lectures</a></td>
                <td><a href="See_Subjects.php">See Subjects</a></td>
            </tr>';
    $nav .= '<tr>
                <td><a href="Add_Discipline.php">Add Discipline</a></td>
                <td><a href="Add_Lecturer.php">Add Lecturers</a></td>
                <td><a href="Add_Lecture.php">Add Lectures</a></td>
                <td><a href="Add_Subject.php">Add Subjects</a></td>
            </tr>';
    $nav .= '</table></nav>';

    echo $nav;

?>