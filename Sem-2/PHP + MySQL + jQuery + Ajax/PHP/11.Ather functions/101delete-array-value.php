<html>
    <body bgcolor="#809638" text="yellow">
    <?php
        require("extra.php");
        $arr = [1, 2, 3, 4, 5, 6];
        array_shift($arr); #delete array first value
        darray($arr);
        
        array_pop($arr); #delete array last value
        darray($arr);
        
        //unset can also delete array in between value
        #find key of value 4
        $key = array_search(4, $arr);
        
        //delete 4 by it's value
        unset($arr[$key]);
        darray($arr);
    ?>
    </body>
</html>