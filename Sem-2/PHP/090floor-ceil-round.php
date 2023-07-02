<html>
	<body bgcolor="#4e301f" text="red">
	<?php
		#return nearest smaller integer number
		echo floor(5.88);
		echo "<br>";
		echo floor(-5.88); 
		
		#return nearest bigger integer number
		echo "<hr>";
		echo ceil(8.55);
		echo "<br>";
		echo ceil(-8.55);
		
		echo "<hr>";
		echo round(8.5588996635, 4);
		echo "<br>";
		echo round(-8.5586487628934698, 8);
	?>
	</body>
</html>