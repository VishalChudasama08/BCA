<?php
  require("extra.php");
  darray($_POST);
  darray($_FILES);
  
  #move_uploaded_file($_FILES['file']['tmp_name'], "testing.png"); #u can set file name as new location
  move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
?>