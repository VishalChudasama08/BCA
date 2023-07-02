<html>
	<body bgcolor="#FED8B1" text="yellow">
	<?php
	 echo "<pre>";
		echo $a = "     To write a per cent for a decimal, move the decimal point two places to the right. Add the per cent sign.    ";
		echo "</pre><hr>";
		echo "Before Trim :".strlen($a);
		$b = ltrim($a);
		echo " After Left Trim :".strlen($b);
		$b = rtrim($a);
		echo " After Right Trim :".strlen($b);
		$b = trim($a);		
		echo " After Both Trim :".strlen($b);
	?>
	</body>
</html>