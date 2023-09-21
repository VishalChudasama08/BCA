<html>
<body bgcolor="lightgrey" text="orange">
  <?php
  message(20); #show 1 error on line 13 becose not send $a2 value
  echo "<hr>";
  message(10, 20);
  echo "<hr>";
  message(10, 20, 30);
  echo "<hr>";
  message(); #show 2 error on line 12, 13 becose not send $a1, $a2 values
  function message() {
    $a1 = func_get_arg(0);
    $a2 = func_get_arg(1);
    echo "value of A1:".$a1."<br>";
    echo "value of A2:".$a2."<br>";
  }
  ?>
</body>
</html>