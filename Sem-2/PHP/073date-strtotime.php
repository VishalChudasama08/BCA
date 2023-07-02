<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        echo date("dS:M:Y")."<br>";
        echo date("dS-M-Y "), strtotime("1 week")."<br>"; # day, month, year, week
        echo date("D d/M/Y", mktime(0, 0, 0, 1, 1, 2023));
    ?>
    </body>
</html>