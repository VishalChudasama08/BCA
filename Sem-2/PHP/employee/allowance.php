<?php require_once "connect1.php" ?>
<html>

<body>
  <?php require_once "menu.php" ?>
  <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
    <a href="allowance_new.php">New Allowance</a>
  </div>

  <?php
  if (isset($_GET['duplicate'])) {
    echo "Entry Already Exist";
  }
  $query = "SELECT a.id, dt.department, dg.designation, a.da, a.ta, a.it FROM allowance a, department dt, designation dg WHERE dt.department=a.department AND dg.designation=a.designation";
  $records = mysqli_query($mysqli, $query);
  ?>
  <form method="post" action="allowance_mysqli.php">
    <table border="1" align="center" style="font-size: 125%; text-align: center;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Department</th>
          <th>Designation</th>
          <th>Da</th>
          <th>Ta</th>
          <th>It</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($records)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['department'] . "</td>";
          echo "<td>" . $row['designation'] . "</td>";
          echo "<td>" . $row['da'] . "</td>";
          echo "<td>" . $row['ta'] . "</td>";
          echo "<td>" . $row['it'] . "</td>";
          echo "<td><input type='checkbox' name='id[]' value='" . $row['id'] . "'/></td>";
          echo "<td><a href='allowance_update.php?id=" . $row['id'] . "'>Update</a></td>";
          echo "</tr>";
        }
        ?>
        <tr>
          <td colspan="6">&nbsp;</td>
          <td><input type="submit" value="Delete" name="submit" /></td>
        </tr>
      </tbody>
    </table>
  </form>
</body>

</html>