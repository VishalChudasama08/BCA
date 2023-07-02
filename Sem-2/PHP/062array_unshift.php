<html>
    <body bgcolor="#7e57c2" text="#ffa000">
    <?php
        $arr1 = [1, 5, 4, 3, 8, 6];
        $arr2 = [10, 50, 40, 30, 80, 60];
        array_unshift($arr1, 7); #add 7 only in begining
        array_unshift($arr1, "a", "b", "c"); #add miltiple
        array_unshift($arr1, $arr2); #add array
        echo "<pre>";
        print_r($arr1);
        echo "</pre>";
    ?>
    </body>
</html>