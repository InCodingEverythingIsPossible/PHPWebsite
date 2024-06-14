<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_SubjectLecturer.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>Add Lecture</h2>
        
        <form action="See_Lectures.php" method="POST">
            <table>
                <tr>
                    <td>Subject</td>
                    <td>Lecturer</td>
                </tr>
                <tr>
                    <td>
                        <select name="subject_id">
                            <?php include '../Select_Include_PW/selectSubject.php';?>
                        </select>
                    </td>
                    <td>
                        <select name="lecturer_id">
                            <?php include '../Select_Include_PW/selectLecturer.php';?>
                        </select>
                    </td>
                </tr>   
                <tr>
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