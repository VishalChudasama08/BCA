<html>
    <body bgcolor="lightgrey" text="orange">
    <?php
        $arr = [10, 20, 30, 40, 50];#size 4,value 10 to 50
        $c = count($arr); #function count array size
        echo "Total Value are: ".$c."<br><hr>";
        for($i=0; $i<$c; $i++){
            echo ($i+1)."value is : ".$arr[$i]."<br>";
        }
    ?>
    </body>
</html>