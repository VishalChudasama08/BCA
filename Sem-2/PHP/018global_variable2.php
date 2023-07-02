<html>
	<body bgcolor="khaki">
	<?php
		$a1="PHP is server side language";
		$a2="PHP is open source language";
		message1();	
		message2();
		function message1(){
			global $a1, $a2;
			echo "M1A1 - ".$a1."<br>";
			echo "M1A1 - ".$a2."<br>";
		} 		
		function message2(){
			global $a2;
			echo "M2A2 - ".$a2."<br>";
		}
	?>
	</body>
</html>