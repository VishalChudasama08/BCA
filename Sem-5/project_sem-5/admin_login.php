<?php
require_once("connect.php");
include_once("header.php");
?>

<body>
    <div class="container">
        <?php
        if (isset($_GET['invalid'])) {
            echo "<h3 style='color: red'>Invalid email or password</h3>";
        }
        if (isset($_GET['save']) && $_GET['save'] == 'yes') {
            echo "<p style='color: green;'>Registration Successfully...</p>";
        }
        if (isset($_GET['pass']) && $_GET['pass'] == 'update') {
            echo "<p style='color: green;'>Reset Password Successfully...</p>";
        }
        ?>
        <div class="card mx-auto" style="min-width: 300px;max-width: 600px;">
            <div class="card-header text-center h5">Login</div>
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
                    <div class="d-flex mb-3 justify-content-evenly">
                    </div>
                    <div class="d-flex mb-3 justify-content-between">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        <a href="forgot_password.php" class="btn btn-outline-secondary">Forgot your Password?</a>
                        <a href="register.php" class="btn btn-outline-success">Register Anew</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include_once("footer.php"); ?>