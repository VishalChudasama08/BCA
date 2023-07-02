<html>
	<body bgcolor="#809638" text="yellow">
	<?php
		echo max(5, 7, 88, 514, 841, 9, 18, 143); #finds max number 
		echo "<br>";
		echo min(5, 7, 88, 514, 841, 9, 18, 143); #finds min number 
		echo "<hr>";
		$arr = [5, 7, 88, 514, 841, 9, 18, 143];
		echo max($arr);
		echo "<br>";
		echo min($arr);
	?>
	</body>
</html>