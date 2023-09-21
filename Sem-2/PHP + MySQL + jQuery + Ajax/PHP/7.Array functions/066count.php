<html>
    <body bgcolor="#aa11c2" text="yellow">
    <?php
        $arr1 = [1, 5, 4, 3, 8];
		$arr2 = [10, 50, [20, 30]];
		$c = count($arr1); #count total values of array
		echo $c."<br>";
		$c = count($arr2); #sub array won't be counted
		echo $c;
    ?>
    </body>
</html>