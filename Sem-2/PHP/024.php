<html>

	<body bgcolor="lightgrey" text="orange">

	<?php

		message(20);

		echo "<hr>";

		message(10, 20);

		echo "<hr>";

		message(10, 20, 30);

		echo "<hr>";

		message();

		function message(){

			$a1 = func_get_arg(0);

			$a2 = func_get_arg(1);

			echo "value of A1:".$a1."<br>";

			echo "value of A2:".$a2."<br>";

		}

	?>

	</body>

</html>