<html>

	<body bgcolor="#FED8B1" text="yellow">

	<?php

		echo "<pre>";

		echo $a = "To write a per cent for a decimal, move the decimal point two places to the right. Add the per cent sign.";

		echo "</pre><hr>";

		

		#single replace

		$b = str_replace("i", "!", $a);

		echo $b;

		echo "<hr>";

		

		#case sensitive

		$b = str_replace("I", "!", $a);

		echo $b;

		echo "<hr>";

		

		#multiple search and single replace

		$vl = ['a', 'e', 'i', 'o', 'u'];

		$b = str_replace($vl, "@", $a);

		echo $b;

		echo "<hr>";

		

		#multiple search and multiple replace

		$vll = ['a', 'e', 'i', 'o', 'u'];
		
		$vlu = ['A', 'E', 'I', 'O', 'U'];
		
		$b = str_replace($vll, $vlu, $a);

		echo $b;

		echo "<hr>";

	?>

	</body>

</html>