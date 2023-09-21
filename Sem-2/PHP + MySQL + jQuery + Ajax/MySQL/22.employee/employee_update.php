<?php require_once("connect1.php"); ?>
<html>

<body>
    <?php
    require_once("menu.php");

    $query = "select * from employee where id=" . $_GET['id'] . "";
    $record = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($record, MYSQLI_ASSOC);
    // ↑↑ this line mysqli_fetch_array() function return table row in array type and MYSQLI_ASSOC this parameter set array values key. key is table feilds name. if use MYSQLI_NUM then set key as number and if use MYSQLI_BOTH then set key as both number and associative

    $query = "select * from department;";
    $department_records = mysqli_query($mysqli, $query);

    $query = "select * from designation;";
    $designation_records = mysqli_query($mysqli, $query);
    ?>

    <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
        <form action="employee_mysqli.php" method="post">
            Employee Surname : <input type="text" name="emp_surname" value="<?= $row['employee_surname'] ?>"><br>
            Employee Name : <input type="text" name="emp_name" value="<?= $row['employee_name'] ?>"><br>
            Salary : <input type="number" name="salary" value="<?= $row['salary'] ?>"><br>
            Department :
            <select name="employee_department">
                <option><i>--select--</i></option>
                <?php
                while ($row = mysqli_fetch_assoc($department_records)) {
                    echo "<option value='" . $row['department'] . "'>" . $row['department'] . "</option>";
                }
                ?>
            </select>
            <br>
            Designation :
            <select name="employee_designation">
                <option><i>--select--</i></option>
                <?php
                while ($row = mysqli_fetch_assoc($designation_records)) {
                    echo "<option value='" . $row['designation'] . "'>" . $row['designation'] . "</option>";
                }
                ?>
            </select>
            <br>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>

</html>