<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        $arr1 = [1, 2, 3, "FIVE", "FOUR", 9, 8, 6];
        asort($arr1); #sam as sort but key will also move with values
        echo "<pre>";
        print_r($arr1);
        arsort($arr1);
        print_r($arr1);
        echo "</pre";
    ?>
    </body>
</html>