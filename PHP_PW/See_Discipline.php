<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Add_Include_PW/whetherAdd_Discipline.php'; ?>
        <?php include '../Add_Include_PW/doAdd_Discipline.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_Discipline.php'; ?>
    </head>
    <body>

        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>See Discipline</h2>

        <h3>Number of disciplines: <?php echo $num?></h3>

        <table>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php include '../Table_Include_PW/table_Discipline.php'; ?>
        </table>

        <article>
            <?php include '../General_Include_PW/article.php'; ?>
        </article>

        <footer>
            <?php include '../General_Include_PW/footer.php'; ?>
        </footer>

    </body>
</html>
