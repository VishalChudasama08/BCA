<html>
    <body bgcolor="#7e57c2" text="#ffa000">
    <?php
        $arr1 = [1, 5, 4, 3, 8, 6, 8, 4, 1];
        $uni = array_unique($arr1); #remove duplicate value
        echo "<pre>";
        print_r($arr1);
        print_r($uni);
        echo "</pre>";
    ?>
    </body>
</html>