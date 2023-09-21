<html>
    <body bgcolor="#809638" text="yellow">
    <?php
        require("extra.php");
        $a = "10.4567abc";
        $b = intval($a);
        echo $b.br();
        $b = floatval($a);
        echo $b.br();
        #intval and floatval will be extract only data not convert it's data type like settype
    ?>
    </body>
</html>