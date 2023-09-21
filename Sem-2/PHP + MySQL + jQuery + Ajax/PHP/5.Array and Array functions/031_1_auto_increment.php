<html>
	<body bgcolor="lightpink" text="green">
	<?php
		$arr = [5=>10, -3=>20.20, "a"=>30, 40.40, "PHP"];
		$i = 0;
		foreach ($arr as $k => $v){
			echo ($i + 1)." - Key is ".$k.", Value is : ".$v."<br>";
			$i++;
		}
	?>
	</body>
</html>