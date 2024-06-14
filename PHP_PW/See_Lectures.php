<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../General_Include_PW/headPartHtml.php'; ?>
        <?php include '../Add_Include_PW/whetherAdd_Lecture.php'; ?>
        <?php include '../Add_Include_PW/doAdd_Lecture.php'; ?>
        <?php include '../Rs_Include_PW/resultSet_Lectures.php'; ?>
    </head>
    <body>
        <header>
            <?php include '../General_Include_PW/header.php'; ?>
        </header>

        <h2>See Lectures</h2>
        <h3>Number of lectures: <?php echo $num?></h3>
        
        <table>
            <tr>
                <th>id</th>
                <th>discipline</th>
                <th>subject</th>
                <th>lecturer</th>
            </tr>
        
            <?php include '../Table_Include_PW/table_Lectures.php'; ?>
        </table>

        <article>
            <?php include '../General_Include_PW/article.php'; ?>
        </article>
        
        <footer>
            <?php include '../General_Include_PW/footer.php'; ?>
        </footer>
    
    </body>
</html>