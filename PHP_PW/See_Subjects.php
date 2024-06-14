<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Add_Include_PW/whetherAdd_Subject.php'; ?>
        <?php include '../Add_Include_PW/doAdd_Subjects.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_Subjects.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>See Subjects</h2>
        <h3>Number of subjects: <?php echo $num?></h3>
        
        <table>
            <tr>
                <th>id</th>
                <th>subject</th>
                <th>discipline</th>
                <th>subject_hours</th>
            </tr>
        
            <?php include '../Table_Include_PW/table_Subjects.php'; ?>
        </table>

        <article>
            <?php include '../General_Include_PW/article.php'; ?>
        </article>
        
        <footer>
            <?php include '../General_Include_PW/footer.php'; ?>
        </footer>
    
    </body>
</html>