<html>
	<body bgcolor="lightpink" text="green">
	<?php
		$arr = [10, 20.20, 30, 5=>40.40, 50, "PHP", "HTML"];
		$i = 0;
		foreach ($arr as $k => $v){
			echo ($i + 1)." - Key is ".$k.", Value is : ".$v."<br>";
			$i++;
		}
	?>
	</body>
</html>