<html>
    <body bgcolor="lightgreen" text="red">
    <?php
    message();
    echo "<hr>";
    message(20);
    echo "<hr>";
    message(10, 20);
    echo "<hr>";
    message(null, 10);
    function message()
    {
        $c = func_num_args();//function count Arguments
        echo "Total Arguments are : ".$c."<br>";
    }
    ?>
    </body>
</html>