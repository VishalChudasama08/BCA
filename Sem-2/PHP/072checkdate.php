<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        $d = "12";
        $m = "13";
        $y = "2023";
        if(checkdate($m, $d, $y)){
            echo "correct date";
        }else{
            echo "invalid date";
        }
    ?>
    </body>
</html>