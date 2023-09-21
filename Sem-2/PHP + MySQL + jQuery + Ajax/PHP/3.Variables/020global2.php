<html>
	<body bgcolor="khaki">
	<?php
		$a1="PHP is server side language";
		message1();	
		function message1(){
			global $a1;
			$a1="PHP is open source language";
			echo "in A1 - ".$a1."<br>";
		}
		echo "out A1 - ".$a1."<br>";
	?>
	</body>
</html>