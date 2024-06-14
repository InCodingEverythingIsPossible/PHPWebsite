<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_Discipline.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>Add Subject</h2>
        
        <form action="See_Subjects.php" method="POST">
            <table>
                <tr>
                    <td>Subject</td>
                    <td>Discipline</td>
                    <td>Subject Hours</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="subject_name">
                    </td>
                    <td>
                        <select name="discipline_id">
                            <?php include '../Select_Include_PW/selectDiscipline.php';?>
                        </select>
                    </td>
                    <td>
                        <input type="number" name="subject_hours">
                    </td>
                </tr>   
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>

        <article>
            <?php include '../General_Include_PW/article.php'; ?>
        </article>

        <footer>
            <?php include '../General_Include_PW/footer.php'; ?>
        </footer>
    
    </body>
</html>