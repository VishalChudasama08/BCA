<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
		$arr1 = [1, 2, 3, "FOUR", "FIVE", 9, 8, 6];
		sort($arr1); #first string values then integer and double, etc value will be sorted
		echo "<pre>";
		print_r($arr1);
		rsort($arr1); #reverse sorting
	    print_r();
		echo "</pre>";
	?>
    </body>
</html>