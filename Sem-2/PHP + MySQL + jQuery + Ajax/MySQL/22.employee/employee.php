<?php require_once("connect1.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        #table {
            font-size: 125%;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php require_once("menu.php"); ?>
    <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
        <a href="employee_new.php">New Employee</a>
    </div>

    <?php
    $query_dt = "SELECT * FROM department";
    $query_dg = "SELECT * FROM designation";

    $records = mysqli_query($mysqli, $query_dt);
    $records = mysqli_query($mysqli, $query_dg);

    $query = "SELECT e.id,e.employee_surname,e.employee_name,dt.department,dg.designation,e.salary FROM employee e,department dt,designation dg WHERE e.employee_department=dt.department AND e.employee_designation=dg.designation";

    $records = mysqli_query($mysqli, $query);
    ?>
    <table border="1" align="center" id="table">
        <form action="employee_mysqli.php" method="post">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Surname</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($records)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['employee_surname'] . "</td>";
                    echo "<td>" . $row['employee_name'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['designation'] . "</td>";
                    echo "<td>" . $row['salary'] . "</td>";
                    echo "<td><input type='checkbox' name='id[]' value='" . $row['id'] . "'></td>";
                    echo "<td><a href='employee_update.php?id=" . $row['id'] . "'>Update</a></td>";
                    echo "</tr>";
                }
                ?>
                <tr>
                    <td colspan="6">&nbsp;</td>
                    <td><input type="submit" name="submit" value="Delete"></td>
                </tr>
            </tbody>
        </form>
    </table>
    <?php
    if (isset($_GET['duplicate'])) {
        echo "<h4 style='color: red; text-align: center;'>Entry Already Exists</h4>";
    }
    ?>
</body>

</html>