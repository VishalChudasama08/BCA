<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    require "menu.php";

    $query = "select * from department;";
    $department_records = mysqli_query($mysqli, $query);

    $query = "select * from designation;";
    $designation_records = mysqli_query($mysqli, $query);
    ?>
    <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
        <form action="employee_mysqli.php" method="post">
            Employee Surname : <input type="text" name="emp_surname"><br>
            Employee Name : <input type="text" name="emp_name"><br>
            Salary : <input type="number" name="salary"><br>
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
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
</body>

</html>