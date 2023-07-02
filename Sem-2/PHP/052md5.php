<html>
    <body bgcolor="#FED8B1" text="yellow">
    <?php
        #encrypt string - generally used to store password
        $a = "Vishal8320";
        $b = md5($a);
        echo $b;
        echo "<hr>";
        $b = sha1($a);
        echo $b;
    ?>
    </body>
</html>