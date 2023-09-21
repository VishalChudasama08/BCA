<html>
	<body bgcolor="khaki">
	<?php
		$a1="PHP is server side language";
		message1();	
		message2();
		function message1(){
			global $a1;
			echo $a1;
		} 		
		function message2(){
			global $a1;
			echo $a1;
		}
	?>
	</body>
</html>