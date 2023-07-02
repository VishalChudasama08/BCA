<html>
	<body bgcolor="#5bf960" text="#f702eb">
	<?php
		if(file_exists("file.txt")){
			$data = file_get_contents("file.txt"); #full fill as next string
			echo $data;
		}
		else{
			echo "file not found";
		}
	?>
	</body>
</html>