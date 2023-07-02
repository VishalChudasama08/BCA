<?php
if ($result = mysqli_query($mysqli, "select database()")) {
    $row = mysqli_fetch_row($result);
    if (!empty($row[0])) {
        echo "<h4>Default database id : " . $row[0] . "</h4>";
    } else {
        echo "<h4>No Default database selected</h4>";
    }
}
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
    <hr>
    <ul class="ul">
        <li>Database
            <ul>
                <li><a href="database_create-or-delete.php">Create and Delete</a></li>
                <li><a href="use-database.php">Use database</a></li>
            </ul>
        </li>
    </ul>
</body>

</html>