<html>
   <body bgcolor="lightblue" text="red">
   <?php
      function a(){
         echo "First function";
      }
      function b(){
         echo "Second function";
      }
      $v1 = "a";
      $v2 = "b1";
      echo $v1;
      echo "<br>";
      echo $v1();
      echo "<hr>";
      echo $v2;
      echo "<br>";
      echo $v2();
   ?>
   </body>
</html>