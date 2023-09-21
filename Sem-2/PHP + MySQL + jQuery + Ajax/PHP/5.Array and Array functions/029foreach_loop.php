<html>
    <body bgcolor="lightgrey" text="orange">
    <?php
        $arr = [10, 20.20, 30, 5=>60.60, "PHP", "HTML"];
        $i = 0;
        foreach($arr as $v){
            echo ($i+1)."value is : ".$v."<br>";
            $i++;
        }
    ?>
    </body>
</html>