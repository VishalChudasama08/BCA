<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        if (file_exists("file.txt")) {
            $h = fopen("file.txt", "r");
            while($l = fgets($h)){
                echo $l."<br>";
            }
        }
        else {
            echo "file not found";
        }
    ?>
    </body>
</html>