<html>
    <body bgcolor="lightgreen" text="red">
    <?php
        message1();
        echo "<hr>";
        message1(20);
        echo "<hr>";
        message1(10, 20);
        echo "<hr>";
        message1(null, 10);
        function message1($a1=null, $a2="PHP")
        {
            echo "value of A1: ".$a1."<br>";
            echo "value of A2: ".$a2."<br>";
        }
    ?>
    </body>
</html>