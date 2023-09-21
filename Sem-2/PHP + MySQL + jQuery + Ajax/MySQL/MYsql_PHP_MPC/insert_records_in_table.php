<?php require("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <!-- action="index5.php"> -->
  <?php
  require "show_all_tables.php";
  if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $selecttdname = $_POST['selecttdname'];
    $table_fields_query = "desc " . $selecttdname . ";";
    $table_fields = mysqli_query($mysqli, $table_fields_query);
    $table_records = mysqli_query($mysqli, "select * from " . $selecttdname . ";");
    $field_number = 0;
    //$field_name = [''];
    while ($table_field_name = mysqli_fetch_row($table_fields)) {
      $field_name[$field_number] = $table_field_name[0]; #table all fields name save in this varaeble
      // $field_type[$field_number] = $table_field_name[1]; #table all fields type save in this varaeble
      $field_number++; # $field_number is find field_number  
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
      echo "<form method='post'>";
      echo "<tr>";
      for ($j = 0; $j < $field_number; $j++) {
        ?>
          <td><input type="text" name="<?= $field_name[$j] ?>" placeholder="Enter <?= $field_name[$j] ?>"></td>
        <?php
      }
      echo "</tr>";
      ?>
      </tbody>
    </table>
    <input type="submit" name="submit" value="insert">
    </form>
  <?php
}
extract($_POST);
if (isset($_POST['submit']) && $_POST['submit'] == 'insert') {
  $insert_query = "insert into student (";
  for ($j = 0; $j < $field_number; $j++) {
    $insert_query .= $field_name[$j] . ", ";
  }
  $insert_query = rtrim($insert_query, " ,");
  $insert_query .= ") values (";
  $insert_query .= "''";
  echo $insert_query;
  echo $_POST['name'];
  // if (mysqli_query($mysqli, $insert_query)) {
  //   echo "Records Insert Successfuliy";
  // } else {
  //   echo "Data Not Insert";
  //   echo mysqli_error($mysqli);
  // }
}
?>
</body>

</html>