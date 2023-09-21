<!DOCTYPE html>
<?php
$images = ["1.png", "2.png", "3.png"];
$r = rand(0, 2);
?>
<html>

<body>
    <img src="<?= $images[$r]; ?>" style="height: 250px; width: 250px;" />

</body>

</html>