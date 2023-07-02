<?php
  require("extra.php");
  darray($_POST);
  darray($_FILES);
  $filename = $_FILES['file']['name']; #get original file name
  $temp = explode(".",$filename); #seprate extensin as array
  $ext = end($temp); #get file extensin as of last value in array
  $filesize = $_FILES['file']['size'];
  if(checkfilesize($filesize)){
    move_uploaded_file($_FILES['file']['tmp_name'], "08_".time().".".$ext); #"08" set as amploy id 
	echo "File upload successfully";
  }
  else{
	echo "File size not allowed";  
  }
?>