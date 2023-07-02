<html>
    <body bgcolor="#809638" text="yellow">
    <?php
        require("extra.php");
        $c = [1, 2, 5, 53, 6, 98];
        $x = 50.555;
        unset($x); #variable will be removed/deleted
        if (isset($x)) { #isset will be check variable exists or not
            echo $x;
        }
        else {
            echo "variable not found";
        }
        if (isset($c)) {
            darray($c);
        }
        else {
            echo "variable not found";
        }
    ?>
    </body>
</html>