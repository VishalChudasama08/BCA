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
  $s_a_f_t_query = "select * from students";
  $s_a_f_t_record = mysqli_query($mysqli, $query);
  ?>
  <table border='1'>
    <thead>
      <tr>
        <th>Seril No</th>
        <th>City</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Father Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row_record = mysqli_fetch_row($s_a_f_t_record)){
      ?>
      <td><?= $row_record[0]; ?></td>
      <td><?= $row_record[4]; ?></td>
      <td><?= $row_record[1]; ?></td>
      <td><?= $row_record[2]; ?></td>
      <td><?= $row_record[3]; ?></td>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>