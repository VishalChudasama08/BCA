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
            margin-top: 2%;
        }
    </style>
</head>

<body>
    <?php
    require_once("menu.php");
    $query = "SELECT e.id,e.employee_surname,e.employee_name,e.employee_department,e.employee_designation,a.da,a.ta,a.it,e.salary FROM employee e,allowance a WHERE e.id=a.id AND e.id=" . $_GET['id'] . " ";
    $record = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($record);

    $query_a = "SELECT e.id,a.da,a.ta,a.it FROM allowance a,employee e WHERE a.department=e.employee_department AND a.designation=e.employee_designation AND e.id=" . $_GET['id'] . "";
    $record_a = mysqli_query($mysqli, $query_a);

    ?>
    <div id="main">
        <table border="2px" id="table" align="center">
            <tr>
                <th colspan=" 5">SALARY SLEEP</th>
            </tr>
            <tr>
                <th>Employ ID : </th>
                <td><?= $row['id'] ?></td>
                <th>Employ Name : </th>
                <td colspan="2"><?= $row['employee_surname'] ?>&nbsp;<?= $row['employee_name'] ?></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><?= $row['employee_department'] ?></td>
                <td>Designation</td>
                <td colspan="2"><?= $row['employee_designation'] ?></td>
            </tr>
            <tr>
                <td colspan="4">TA -
                    <?php
                    while ($row_a = mysqli_fetch_row($record_a)) {
                        $ta = $row_a['1'];
                        $da = $row_a['2'];
                        $it = $row_a['3'];
                        echo $ta;
                    }
                    ?>%
                </td>
                <td>
                    <?php
                    $ta_v = (($row['salary'] * $ta) / 100);
                    echo $ta_v;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">DA -
                    <?= $da ?>%
                </td>
                <td>
                    <?php
                    $da_v = (($row['salary'] * $da) / 100);
                    echo $da_v;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">IT -
                    <?= $it ?>%
                </td>
                <td>-
                    <?php
                    $it_v = (($row['salary'] * $it) / 100);
                    echo $it_v;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">Total</td>
                <td>
                    <?php
                    $total = ($ta_v + $da_v) - ($it_v);
                    echo $total;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">Gross Salary</td>
                <td><?= $row['salary'] ?></td>
            </tr>
            <tr>
                <td colspan="4">Final Salary</td>
                <td><?= ($row['salary'] + $total) ?></td>
            </tr>
        </table>
    </div>

</body>

</html>