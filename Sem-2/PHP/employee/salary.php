<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #table {
            text-align: center;
            font-size: 125%;
        }
    </style>
</head>

<body>
    <?php
    require_once "menu.php";


    $query = "SELECT e.id,e.employee_surname,e.employee_name,dt.department,dg.designation,e.salary FROM employee e,department dt,designation dg WHERE e.employee_department=dt.department AND e.employee_designation=dg.designation";
    $record = mysqli_query($mysqli, $query);
    ?>
    <table border="1" align="center" id="table">
        <form action="employee_mysql.php" method="post">
            <h2 align="center">Genrate Salary Slip Here</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Surname</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Fixed Salary</th>
                    <th>Salary</th>
                </tr>
            </thead>

            <tbody>

                <?php

                while ($row = mysqli_fetch_assoc($record)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['employee_surname'] . "</td>";
                    echo "<td>" . $row['employee_name'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['designation'] . "</td>";
                    echo "<td>" . $row['salary'] . "</td>";

                    echo "<td> <a href='salary_genrate.php?id=" . $row['id'] . "'> Genrate </a></td>";
                    echo "</tr>";
                }

                ?>

            </tbody>
        </form>
    </table>

    <?php
    if (isset($_GET['duplicate'])) {
        echo "<h4 style='color: red; text-align:center;'>Entry Already Exists </h4>";
    }
    ?>

</body>

</html>