<?php
require_once("connect.php");
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['invalid'])) {
            echo "<h3 style='color: red'>Invalid email or password</h3>";
        }
        if (isset($_GET['save']) && $_GET['save'] == 'yes') {
            echo "<p style='color: green;'>Registration Successfully...</p>";
        }
        ?>
        <div class="card mx-auto" style="max-width: 300px;">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="login_check.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    <a href="index.php" class="btn btn-primary" name="cancel">Cancel</a>
                    <div class="d-flex mb-3 justify-content-between">
                        <a href="forgot_password.php">Forgot your Password?</a>
                        <a href="register.php">Register Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once("footer.php");
?>

</html>