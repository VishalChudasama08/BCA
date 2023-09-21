<html>
    <body bgcolor="#FED8B1" text="yellow">
    <?php
        #chunk string at fixed length
        $a = "Lorem ipsum dolor sit amet.";
        $b = str_split($a, 5);
        echo "<pre>";
        print_r($b);
        echo "</pre>";
    ?>
    </body>
</html>