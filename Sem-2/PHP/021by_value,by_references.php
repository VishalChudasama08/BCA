<html>
    <body bgcolor="lightgreen" text="red">
    <?php
        $a1 = "PHP is server side language. ";
        $a2 = "Platform independent. ";
        message1($a1, $a2);
        function message1(&$a1, $a2)
        {
            $a1 .= "PHP is open source language";
            $a2 .= "Works on all OS";
            echo "InA1 - ".$a1."<br>";
            echo "InA2 - ".$a2."<br>";
        }
        echo "OutA1 - ".$a1."<br>";
        echo "OutA2 - ".$a2."<br>";
    ?>
    </body>
</html>