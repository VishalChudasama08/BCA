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
    <div class="container" style="width: 40rem;">
        <div class="row row-cols-lg-auto g-3">
            <p>If you are already registered and You forgot your username or password then fill this form, Else <a href="register.php">Register Anew.</a></p>
            <div><!-- class="col-12 p-0"  -->
                <label for="username_number" class="form-label">Enter email (Username) or mobile number :</label>
            </div>
            <div style="margin-top: 13px;"><!--  class="col-12"  -->
                <input type="text" class="form-control" id="username_number" name="username_number" required>
            </div>
            <div style="margin-top: 13px;"><!--  class="col-12"  -->
                <button class="btn btn-primary" id="goCheck" onclick="loadQuestion();">Go</button>
            </div>
        </div>
        <div class="row row-cols-lg-auto g-3 pt-3" id="check_user"></div>
        <div id="new"></div>
    </div>
</body>
<script>
    function loadQuestion() {
        let username_number = document.getElementById("username_number").value;
        console.log(username_number);

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("check_user").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "check_user.php?email_num=" + username_number + "");
        // document.write(xhttp);
        xhttp.send();
    }

    function loadForm() {
        let question_answer = document.getElementById("question_answer").value;
        console.log(question_answer);

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "check_security_question_answer.php?answer=" + question_answer + "");
        // document.write(xhttp);
        xhttp.send();
    }
    // const button = document.getElementById('goCheck');
    // button.addEventListener('click', function() {
    //     // Disable the button after the first click
    //     this.disabled = true;

    //     // Optionally, display a message or perform other actions
    //     console.log("Button clicked and disabled.");
    // });
</script>
<?php
include_once("footer.php");
?>