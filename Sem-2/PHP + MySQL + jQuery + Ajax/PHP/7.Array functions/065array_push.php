<html>
    <body bgcolor="#aa11c2" text="yellow">
    <?php
        $arr1 = [1, 5, 4, 3, 8];
        array_push($arr1, 10); #add new values in last
        array_push($arr1, 20, 30); #add multi values in last
		echo "<pre>";
		print_r($arr1);
		echo "</pre>";
    ?>
    </body>
</html>