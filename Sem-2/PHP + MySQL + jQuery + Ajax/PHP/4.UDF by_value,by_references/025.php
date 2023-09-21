<html>
<body bgcolor="lightgrey" text="orange">
  <?php
  message(20);
  echo "<hr>";
  message(10, 20);
  echo "<hr>";
  message(10, 20, 30);
  echo "<hr>";
  message();
  function message() {
    $count = func_num_args();
    for ($i = 0; $i < $count; $i++) {
      $a = func_get_arg($i);
      echo "value of A".($i + 1).": ".$a."<br>";
    }
  }
  ?>
</body>
</html>