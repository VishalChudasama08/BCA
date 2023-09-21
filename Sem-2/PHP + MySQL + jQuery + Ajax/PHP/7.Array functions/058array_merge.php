<html>
    <body bgcolor="#7e57c2" text="#ffa000">
    <?php
        $arr1 = [1, 5, 4, 3, 8, 6];
        $arr2 = [10, 50, 40, 30, 80, 60];
        $arr3 = array_merge($arr1, $arr2);
        echo "<pre>";
        print_r($arr3);
        echo "</pre>";
    ?>
    </body>
</html>