<html>
	<body bgcolor="lightblue" text="red">
	<?php
		$arr = [10,20,[30,["a"=>1, "b"=>2, "c"=>3]],50,60];
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		foreach($arr as $v){
			if(is_array($v)){
				continue;
			}
			echo $v."<br>";
		}
		foreach($arr[2][1] as $v){
		echo $v."<br>";
		}
	?>
	</body>
</html>