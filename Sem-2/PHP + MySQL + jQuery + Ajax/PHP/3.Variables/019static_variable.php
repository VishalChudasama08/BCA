<html>
	<body bgcolor="khaki">
	<?php
		counter();counter();counter();counter();
		function counter(){
			static $c = 0;
			$c++;
			echo "counter value : ".$c."<br>";
		} 		
	?>
	</body>
</html>