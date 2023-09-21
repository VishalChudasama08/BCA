<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <?php require_once "menu.php"; ?>
  <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
    <a href="designation_new.php">New designation</a>
  </div>
  <?php
  $query = "select * from designation";
  $records  = mysqli_query($mysqli, $query);
  ?>
  <form action="designation_mysqli.php" method="post">
    <table border="2px" align="center" style="font-size: 125%; text-align: center;">
      <thead>
        <tr>
          <th>ID</th>
          <th>designation</th>
          <th>Action</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($records)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['designation'] . "</td>";
          echo "<td>" . $row['active'] . "</td>";
          echo "<td><input type='checkbox' name='id[]' value='" . $row['id'] . "'></td>";
          echo "<td><a href='designation_update.php?id=" . $row['id'] . "'>Update</a></td>";
        }
        ?>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td><input type="submit" name="submit" value="Delete" /></td>
        </tr>
      </tbody>
    </table>
  </form>
</body>

</html>
<!-- VALUES ==> "Peon","Clerk",Manager" -->