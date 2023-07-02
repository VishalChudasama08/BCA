<html>
	<body bgcolor="#5bf960" text="#f702eb">
	<?php
		if(file_exists("file.txt")){
			$newstring = "The cat sat on the mat. It groomed its fur. The sun shone through the window. The birds sang outside. All was peaceful.";
			file_put_contents("file.txt", $newstring); #WRITE mod
			file_put_contents("file.txt", $newstring, FILE_APPEND | LOCK_EX); #APPEND mod
		}
		else{
			echo "file not found";
		}
	?>
	</body>
</html>