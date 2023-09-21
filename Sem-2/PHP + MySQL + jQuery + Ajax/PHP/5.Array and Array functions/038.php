<html>
   <body bgcolor="lightblue" text="red">
   <?php
      message();
      message(10, 20);
      message("ABC", 20, "XYZ");
      function message(){
          $vs = func_get_args();
          foreach($vs as $v){
              echo $v."<br>";
          }
          echo "<hr>";
      }
   ?>
   </body>
</html>