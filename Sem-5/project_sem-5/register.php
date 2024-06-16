<?php
require_once("connect.php");
include_once("header.php");
?>
<style>
    #main {
        display: grid;
        place-items: center;
    }
</style>

<body>
    <div class="container">
        <h2>User Registration Form</h2>
        <div>
            <form method="post" action="register_mysqli.php?v=8" id="main">
                <div class="col-md-4 col-sm-8">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-4 col-sm-8">
                    <label for="email" class="form-label">Email (Username):</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-4 col-sm-8">
                    <label for="password" class="form-label">Create Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-4 col-sm-8">
                    <label for="mobile_number" class="form-label">Mobile Number:</label>
                    <input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
// if (!empty($successMsg)) {
//     echo "<p class='success'>" . $successMsg . "</p>";
// }
include_once("footer.php");
?>