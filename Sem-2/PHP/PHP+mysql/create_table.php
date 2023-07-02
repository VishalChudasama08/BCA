<?php require("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div>
    <h2>Create Table</h2>
    <form method="post">
      <label for="tbname">Eenter Table name : </label>
      <input type="text" name="tbname" id="tbname"><br>
      <label for="fields">Eenter Fields : </label>
      <input type="number" name="fields" id="fields"><br>
      <input type="submit" value="generate" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']) && $_POST['submit'] == 'generate'){
      $tbname = $_POST['tbname'];
      $_SESSION['tbname'] = $_POST['tbname'];
      $fields = $_POST['fields'];
      echo '<form method="post">';
      for ($i = 0; $i < $fields; $i++) {
    ?>
    <input type="text" name="fn[]" size="20" placeholder="Enter Field Name">
    <select name="fd[]">
      <option>int</option>
      <option>varchar</option>
      <option>text</option>
      <option>date</option>
    </select>
    <input type="number" name="fs[]" size="5" placeholder="Size">
    <br>
    <?php
      }
      echo '<input type="submit" name="submit" value="create">';
      echo '</form>';
      
      if (isset($_POST['submit']) && $_POST['submit'] == 'create') {
        $query = "create table ".$_SESSION['tbname']." (";
        foreach ($_POST['fn'] as $k=>$f){
          $query .= $_POST['fn'][$k]." ".$_POST['fd'][$k]."(".$_POST['fs'][$k]."),";
        }
        $query = rtrim($query, " ,");
        $query .= ")";
      }
      if (mysqli_query($mysqli, $query)) {
        echo "Create Table Successfully";
      }
      else {
        echo "Table Not Created<br>";
        echo mysqli_error($mysqli);
      }
    }
    ?>
  </div>
</body>

</html>