<?php
require_once("connect1.php");
extract($_POST);
if (isset($submit) && $submit == "save") {
    $query = "SELECT * FROM allowance WHERE id_department=" . $id_department . " AND id_designation=" . $id_designation . ";";
    $records = mysqli_query($mysqli, $query);
    $count = mysqli_num_rows($records);
    if ($count > 0) {
        header("location:allowance.php?duplicate");
        exit;
    } else {
        // allowed
        $query = "INSERT INTO allowance(id_department, id_designation, da, ta, it) VALUES (" . $id_department . ", " . $id_designation . ", " . $da . ", " . $ta . ", " . $it . ")";
    }
}
if (isset($submit) && $submit == "Delete") {
    $ids = implode(", ", $id);
    $query = "DELETE FROM allowance WHERE id IN(" . $ids . ")";
}
if (isset($submit) && $submit == "Update") {
    echo $query = "UPDATE allowance SET id_department=" . $id_department . " id_designation=" . $id_designation . " WHERE id=" . $id . ""; // This query not okay
}
if (mysqli_query($mysqli, $query)) {
    header("location:allowance.php");
} else {
    echo mysqli_error($mysqli);
    echo "<br>";
    echo $query;
}
