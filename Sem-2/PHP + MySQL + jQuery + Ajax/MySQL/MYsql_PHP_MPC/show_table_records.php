<?php require("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <?php
  require "show_all_tables.php";
  if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $selecttdname = $_POST['selecttdname'];
    $table_fields_query = "desc " . $selecttdname . ";";
    $table_fields = mysqli_query($mysqli, $table_fields_query);
    $table_records = mysqli_query($mysqli, "select * from " . $selecttdname . ";");
    $field_number = 0;
    $field_name = [''];
    while ($table_field_name = mysqli_fetch_row($table_fields)) {
      $field_name[$field_number] = $table_field_name[0];
      $field_number++;
    }
    ?>
    <table border='1' align="center">
      <thead>
        <tr>
          <?php
          for ($j = 0; $j < $field_number; $j++) {
            ?>
            <th><?= $field_name[$j] ?></th>
          <?php
        }
        ?>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row_record = mysqli_fetch_row($table_records)) {
          echo "<tr>";
          foreach ($row_record as $record) {
            ?>
            <td><?= $record; ?></td>
          <?php
        }
        echo "</tr>";
      }
    }
    ?>
    </tbody>
  </table>
</body>

</html>