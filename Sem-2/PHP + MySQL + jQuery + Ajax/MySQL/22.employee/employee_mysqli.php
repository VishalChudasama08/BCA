<?php
require_once("connect1.php");
extract($_POST);
if (isset($submit) && $submit == "Save") {
    $query = "SELECT * FROM employee WHERE employee_name=" . $emp_name . " AND employee_surname=" . $emp_surname . ";"; //
    if (!$records = mysqli_query($mysqli, $query)) {
        echo mysqli_error($mysqli);
    }
    $count = mysqli_num_rows($records);
    if ($count > 0) {
        header("location:employee.php?duplicate");
        exit;
    } else {
        // allowed
        $query = "INSERT INTO employee (employee_name,employee_surname,employee_department,employee_designation,salary) VALUES ('" . $emp_name . "', '" . $emp_surname . "', '" . $employee_department . "', '" . $employee_designation . "', " . $salary . ")";
    }
}
if (isset($submit) && $submit == "Delete") {
    $ids = implode(", ", $id);
    $query = "DELETE FROM employee WHERE id IN(" . $ids . ")";
}
if (isset($submit) && $submit == "Update") {
    $query = "UPDATE employee SET emp_name='" . $emp_name . "', emp_surname='" . $emp_surname . "',emp_department='" . $employee_department . "',emp_designation='" . $employee_designation . "',salary=" . $salary . " WHERE id=" . $ids . "";
}
if (mysqli_query($mysqli, $query)) {
    header("location:employee.php");
} else {
    echo mysqli_error($mysqli);
    echo "<br>";
    echo $query;
}
