<html>
	<body bgcolor="greenyellow" text="red">
	<?php
		function message($a2){
			echo "PHP is open source langauge";
			return $a2;
		}
		$a1 = "PHP is server side langauge";
		$a1 = message($a1);
	?>
	</body>
</html>