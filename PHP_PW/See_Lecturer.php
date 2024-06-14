<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Add_Include_PW/whetherAdd_Lecturer.php'; ?>
        <?php include '../Add_Include_PW/doAdd_Lecturer.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_Lecturer.php'; ?>
    </head>
    <body>

        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>See Lecturers</h2>

        <h3>Number of lecturers: <?php echo $num?></h3>

        <table>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php include '../Table_Include_PW/table_Lecturer.php'; ?>
        </table>

        <article>
            <?php include '../General_Include_PW/article.php'; ?>
        </article>

        <footer>
            <?php include '../General_Include_PW/footer.php'; ?>
        </footer>

    </body>
</html>
