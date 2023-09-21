<html>
	<body bgcolor="#4e301f" text="red">
	<?php
		if (file_exists("file.txt")){
			#read first given length character
			$h = fopen("file.txt", "r");
			$data = fread($h, 18);
			echo $data;
		}
		else {
			echo "file not found";
		}
	?>
	</body>
</html>