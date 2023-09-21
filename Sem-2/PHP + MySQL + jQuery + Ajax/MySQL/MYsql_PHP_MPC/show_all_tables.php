<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post">
            <?php
            $all_tables = mysqli_query($mysqli, "show tables");
            echo '<select name="selecttdname">';
            while ($tables = mysqli_fetch_row($all_tables)) {
                echo '<option>' . $tables[0] . '</option>';
            }
            echo '</select>';
            ?>
        </form>
    </div>
</body>

</html>