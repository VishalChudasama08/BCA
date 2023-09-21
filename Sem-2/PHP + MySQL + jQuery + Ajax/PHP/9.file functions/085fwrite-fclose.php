<html>
	<body bgcolor="#4e301f" text="red">
	<?php
		if (file_exists("file.txt")){
			$data = "The cat sat on the mat. It groomed its fur. The sun shone through the window. The birds sang outside. All was peaceful.";
			$h = fopen("file.txt", "a"); #w for write mode, a for append mode
			fwrite($h, $data);
			fclose($h);
		}
		else {
			echo "file not found";
		}
	?>
	</body>
</html>