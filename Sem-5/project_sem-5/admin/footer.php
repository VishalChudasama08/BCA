<?php
$uri = $_SERVER['REQUEST_URI']; // return running url (not full url)
$file_url = explode('/', $uri);
$count = count($file_url);
$file_name_with_extension = $file_url[$count - 1];
$file_name = explode(".", $file_name_with_extension)[0];


$position = "";
$absolute_file_name = ["admin_login.php", "dashboard.php?delete=no", "dashboard.php?delete=yes", "dashboard.php?profile=update"];
if (in_array($file_name_with_extension, $absolute_file_name)) {
    $position = "absolute";
} else {
    $position = "relative";
}
?>
<div class="container-flued mt-2" style="width: 100%;position:<?= $position; ?>;bottom: 0px;background-color: #A0C49D;" id="footer">
    <footer>
        <div class="mt-auto py-1 text-center">
            <div class="d-flex justify-content-center">
                <?php
                // echo $file_name_with_extension;
                // echo $file_name;
                ?>
                <a href="../privacy.php" class="me-3">Privacy Policy</a>
                <a href="../terms.php" class="ms-3">Terms of Service</a>
            </div>
            <p class="m-0">&copy;<?= date("Y"); ?> V2 Online Movies Booking System. All rights reserved.</p>
        </div>
    </footer>
</div>

</html>