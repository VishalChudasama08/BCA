<?php
require "connect.php";
?>
<html>

<body>
   <form method="post">
      <hr>
      <label>Enter Database name : </label>
      <?php
      $data = mysqli_query($mysqli, "show databases;");
      echo "<select name='usedbname'>";
      while ($record = mysqli_fetch_row($data)) {
         echo "<option>" . $record[0] . "</option>";
      }
      echo "</select>";
      ?>
      <br>
      <input type="submit" name="submit">
   </form>
   <?php
   echo $_POST['usedbname'];
   if (isset($_POST['submit'])) {
      $usedbname = $_POST['usedbname'];
      echo $usedbname;
      mysqli_select_db($mysqli, $usedbname);
      $use_db_query = "USE ".$usedbname.";";
      mysqli_query($mysqli, $use_db_query);
      header("location:index5.php");
   }

   ?>
</body>

</html>