<html>

<body>

    <form method="post">
        <?php require "database_list.php"; ?>
        <hr>
        <label>Enter Database name : </label>
        <input type="text" name="dbname" required>
        <br>
        <input type="submit" value="Use" name="submit">
    </form>
    <?php
    require "connect.php";
    $all_databases = mysqli_query($mysqli, "use " . $_POST['dbname'] . ";");
    ?>
</body>

</html>