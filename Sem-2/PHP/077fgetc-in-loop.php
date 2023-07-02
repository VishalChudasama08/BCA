<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        if (file_exists("file.txt")) {
            $h = fopen("file.txt", "r");
            while($c = fgetc($h)){
                echo $c;
            }
        }
        else {
            echo "file not found";
        }
    ?>
    </body>
</html>