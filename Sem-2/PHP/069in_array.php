<html>
    <body bgcolor="#aa11c2" text="yellow">
    <?php
		$arr1 = [1, 2, 3, "FOUR", "Five"];
		if(in_array("FIVE", $arr1)){
			echo "Found in array";
		}
		else{
			echo "Not Found in array"; #case sensitive values
		}
	?>
    </body>
</html>