<html>
    <body bgcolor="#aa11c2" text="yellow">
    <?php
        $arr1 = [1, 5, 4, 3, 8];
		echo current($arr1); #current key [node] value
		echo next($arr1); #shift to next
		echo next($arr1); #shift to next
		echo prev($arr1); #shift to previous value
		echo end($arr1); #shift to last value
		echo current($arr1);
		echo reset($arr1); #shift to first value
	?>
    </body>
</html>