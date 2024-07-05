<?php
require_once("connect.php");
$email_number = $_GET['email_num'];
$query = "SELECT * FROM users WHERE mobile_number = '" . $email_number . "' OR email = '" . $email_number . "';";
$record  = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($record);

$question = "";
if (isset($row)) {
    $_SESSION['forgot_p_use'] = $row['id'];
    // print_r($_SESSION);
    $question = $row['security_question'];
    echo "<script>const button = document.getElementById('goCheck');
    button.addEventListener('click', function() {
        // Disable the button after the first click
        this.disabled = true;
        console.log('Button clicked and disabled.');
    });</script>";
} else {
    die("<h4 style='color: red;text-align:center;padding-top:10px'>Not Found Your Any Records.</h4>");
}
?>
<div><!-- class="col-12 p-0"  -->
    <label for="question_answer" class="form-label"><?= $question; ?></label>
</div>
<div style="margin-top: 13px;"><!--  class="col-12"  -->
    <input type="text" class="form-control" id="question_answer" name="question_answer" required>
</div>
<div style="margin-top: 13px;"><!--  class="col-12"  -->
    <button class="btn btn-primary" onclick="loadForm();">Go</button>
</div>