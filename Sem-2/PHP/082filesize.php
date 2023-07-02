<html>
    <body bgcolor="#5bf960" text="#f702eb">
    <?php
        if (file_exists("file.txt")){
            $size = filesize("file.txt"); #get file size in bytes
            echo "Total Bytes : ".$size."<br>";
            $kb = $size/1024;
            echo "Total kb : ".$k;
        }
        else {
            echo "file not found";
        }
    ?>
    </body>
</html>