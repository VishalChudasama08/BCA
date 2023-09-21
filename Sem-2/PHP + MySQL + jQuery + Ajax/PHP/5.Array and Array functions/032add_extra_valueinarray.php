<html>
	<body bgcolor="lightpink" text="green">
	<?php
		$arr = [-5=>10, "a"=>20.20, 30, "PHP"];
		$arr[12] = 40;
		$arr["b"] = 50;
		$arr[] = "HTML";
		$arr[] = 60;
		$i = 0;
		foreach ($arr as $k => $v){
			echo ($i + 1)." - Key is ".$k.", Value is : ".$v."<br>";
			$i++;
		}
	?>
	</body>
</html>