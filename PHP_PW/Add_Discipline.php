<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>
        
        <h2>Add Lecturer</h2>
        
        <form action="See_Discipline.php" method="POST">
            <table>
                <tr>
                    <td></td>
                    <td>New Discipline</td>
                </tr>

                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="discipline_name">
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