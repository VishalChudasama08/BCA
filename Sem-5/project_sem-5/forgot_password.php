<?php
require_once("connect.php");
include_once("header.php");
$query = "SELECT * FROM users WHERE password='';";
$records  = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($records);
if (isset($_GET['go'])) {
    echo "Yes!!!";
}
?>

<body>
    <div class="container" style="width: 35rem;">
        <form method="post" action="login.php" class="row row-cols-lg-auto g-3">
            <p>If you are alredy registered and You forgot your username and password then fill this form, Else <a href="register.php">Register Anew.</a></p>
            <div class="col-12">
                <label for="mobile_number" class="form-label">Mobile Number:</label>
            </div>
            <div class="col-12">
                <input type="tel" class="col-12 form-control" id="mobile_number" onkeyup="fetch(this.value)" name="mobile_number" required>
            </div>
            <div class="col-12">
                <a href="#" class="col-12 btn btn-primary" onclick="loadDoc('update_password.php')">Go</a>
            </div>
            <div id="new"></div>
        </form>
    </div>
</body>
<script>
    function fetch(s) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "update_password.php?num=" + s + "");
        // document.write(xhttp);
        xhttp.send();
    }

    function loadDoc(page) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", page);
        xhttp.send();
    }
</script>
<?php
include_once("footer.php");
?>