<html>
    <body bgcolor="#FED8B1" text="yellow">
    <?php
        #string to array
        $a = "Lorem ipsum dolor sit omet.";
        echo "<pre>";
        $arr = explode(" ", $a);
        print_r($arr);
        $arr = explode("i", $a);
        print_r($arr);
        echo "</pre>";
        #check i will not store - needel will be removed
    ?>
    </body>
</html>