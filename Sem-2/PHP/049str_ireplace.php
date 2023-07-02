<html>
	<body bgcolor="#FED8B1" text="yellow">
	<?php
		echo "<pre>";
		echo $a = "To write a per cent for a decimal, move the decimal point two places to the right. Add the per cent sign.";
		echo "</pre><hr>";
		
		#case in-sensitive
		$b = str_ireplace("I", "!", $a);
		echo $b;
		echo "<hr>";
	?>
	</body>
</html>