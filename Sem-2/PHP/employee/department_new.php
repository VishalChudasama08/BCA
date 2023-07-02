<?php require_once("connect1.php"); ?>
<html>

<body>
  <?php require_once("menu.php") ?>
  <form method="post" action="department_mysqli.php">
    Department Name : <input type="text" name="department" required />
    <input type="submit" name="submit" value="Save" />
  </form>
</body>

</html>