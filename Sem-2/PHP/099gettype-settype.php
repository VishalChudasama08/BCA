<html>
    <body bgcolor="#809638" text="yellow">
    <?php
        require("extra.php");
        $a = 10;
        $b = "abc";
        $c = true;
        echo gettype($a).br();
        echo gettype($b).br();
        echo gettype($c).br();
        echo hr();
        settype($a, "double"); #value will be convert data type
        echo gettype($a).br(); #converted data type
        settype($b, "double"); #value will ne destroyed
        echo gettype($b).br();
        echo $b.br();
    ?>
    </body>
</html>