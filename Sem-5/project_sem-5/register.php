<?php
require_once("connect.php");
include_once("header.php");
?>

<body>
    <div class="container">
        <div class="card mx-auto" style="min-width: 300px;max-width: 600px;">
            <div class="card-header text-center">New User Registration Form</div>
            <div class="card-body">
                <form method="post" action="register_mysqli.php?v=8" id="main">
                    <div class="md-3 pb-2">
                        <label for="name" class="form-label">Your Name :-</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="md-3 pb-2">
                        <label for="email" class="form-label">Email (Username) :-</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="md-3 pb-2">
                        <label for="password" class="form-label">Create Password :-</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="md-3 pb-2">
                        <label for="mobile_number" class="form-label">Mobile Number :-</label>
                        <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
                    </div>
                    <div class="md-3 pb-2">
                        <label for="security_question" class="form-label">Security Question :-</label>
                        <select class="form-control" id="security_question" name="security_question" required>
                            <option value="" disabled selected hidden>-- click to select security question--</option>
                            <option>What is your nickname ?</option>
                            <option>What is your birth month ?</option>
                            <option>What was your favorite school teacher's name ?</option>
                            <option>What's your favorite movie ?</option>
                            <option>What's your favorite color ?</option>
                            <option>What's your favorite number in 0 to 9 ?</option>
                            <option>What city were you born in ?</option>
                            <option>What was the name of your first childhood friend ?</option>
                        </select>
                    </div>
                    <div class="md-3 pb-2">
                        <label for="answer" class="form-label">Security Question Answer :-</label>
                        <span style="float: right;font-size: 12px;padding-top: 10px;opacity: .8;">Note: This is what you need to remember.</span>
                        <input type="text" class="form-control" id="answer" name="answer" required>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
// if (!empty($successMsg)) {
//     echo "<p class='success'>" . $successMsg . "</p>";
// }
include_once("footer.php");
?>