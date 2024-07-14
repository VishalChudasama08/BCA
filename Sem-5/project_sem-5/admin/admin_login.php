<?php
require_once("../connect.php");
unset($_SESSION['user_id']);
if (isset($_SESSION['admin'])) {
    echo "
    <script type='text/javascript'>
        let res = confirm('You are already login! You want to log out ?');
        if (res) {
            sessionStorage.clear();
            window.location.href = 'admin_logout.php'
            // (window.location.href = 'logout.php').then((value)=>{ window.location.href = 'admin_login.php';})
        } else {
            window.location.href = 'dashboard.php';
        }
    </script>
    ";
}
include_once("header.php");
?>

<body>
    <div class="container">
        <?php
        if (isset($_GET['invalid'])) {
            echo "<h5 style='color: red'>Invalid email or password</h5>";
        }
        if (isset($_GET['save']) && $_GET['save'] == 'yes') {
            echo "<p style='color: green;'>Registration Successfully...</p>";
        }
        if (isset($_GET['pass']) && $_GET['pass'] == 'update') {
            echo "<p style='color: green;'>Reset Password Successfully...</p>";
        }
        ?>
        <div class="card mx-auto" style="min-width: 300px;max-width: 600px;">
            <div class="card-header text-center h5">Admin Login</div>
            <div class="card-body">
                <form action="admin_login_check.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex mt-3 justify-content-center">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include_once("footer.php"); ?>