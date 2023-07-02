<html>
	<body bgcolor="#4e301f" text="red">
	<?php
		if (file_exists("file.txt")){
			#read full file
			$size = filesize("file.txt");
			$h = fopen("file.txt", "r");
			$data = fread($h, $size);
			echo $data;
		}
		else {
			echo "file not found";
		}
	?>
	</body>
</html>