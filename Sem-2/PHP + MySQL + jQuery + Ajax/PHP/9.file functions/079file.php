<html>
    <body bgcolor="#dba1ed" text="yellow">
    <?php
        if (file_exists("file.txt")) {
            $file=file("file.txt"); #read full file line by line as array
            echo "<pre>";
            print_r($file);
            echo "</pre>";
        }
        else {
            echo "file not found";
        }
    ?>
    </body>
</html>