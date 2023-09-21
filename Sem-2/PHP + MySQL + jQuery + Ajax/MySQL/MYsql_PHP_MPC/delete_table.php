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
            echo '<select name="tdname">';
            while ($tables = mysqli_fetch_row($all_tables)) {
                echo '<option>' . $tables[0] . '</option>';
            }
            echo '</select>';
            echo '<input type="submit" name="submit" value="Delete">';
            if (isset($_POST['submit']) &&  $_POST['submit'] == 'Delete') {
                $selected_table = "drop table " . $_POST['tdname'] . ";";
                echo $selected_table;
                if (mysqli_query($mysqli, $selected_table)) {
                    echo "Table Deleted Successfully";
                } else {
                    echo "Table Not Deleted<br>";
                    echo mysqli_error($mysqli);
                }
            }
            ?>
        </form>
    </div>
</body>

</html>