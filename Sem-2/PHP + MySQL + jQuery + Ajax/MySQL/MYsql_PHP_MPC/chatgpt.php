<!-- file no. 1
 --><?php
require_once "connect.php";

if(isset($_POST['submit'])) {
    $dbname = $_POST['dbname'];

    // Execute the "USE database_name" query on the server
    $use_db_query = "USE $dbname;";
    if(mysqli_query($mysqli, $use_db_query)) {
        // If the query was successful, display a success message
        echo "Database '$dbname' selected successfully!";
    } else {
        // If the query failed, display an error message
        echo "Error selecting database: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Database</title>
</head>
<body>
    <h2>Select Database</h2>
    <form method="post">
        <label>Enter Database Name:</label>
        <input type="text" name="dbname">
        <input type="submit" name="submit" value="Select">
    </form>
</body>
</html>

<!-- file no. 2 -->

<!-- To dynamically select a database and display its name on a web page using PHP, you can use the following code:
 --><?php
// connect to MySQL server
$host = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password) or die("Connection failed: " . mysqli_connect_error());

// dynamically select a database
$dbname = "my_database";
mysqli_select_db($conn, $dbname);

// display the name of the selected database
echo "Selected database: " . $dbname;
?>

<!-- file no. 3 -->

<?php
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = mysqli_connect($host, $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
mysqli_select_db($conn, $dbname);

// Use the selected database
$result = mysqli_query($conn, "USE $dbname;");

// Echo the selected database name
echo "Selected database: " . $dbname;

// Close connection
mysqli_close($conn);
?>


<!-- file no. 4 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic content loading with AJAX</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Listen for link clicks in the page
      $("a").click(function(event) {
        // Prevent default link behavior
        event.preventDefault();
        // Get the href attribute of the clicked link
        var href = $(this).attr("href");
        // Use AJAX to load the content of the PHP program into the #d2 div
        $.ajax({
          url: href,
          type: "GET",
          success: function(data) {
            $("#d2").html(data);
          },
          error: function() {
            alert("An error occurred while loading the content.");
          }
        });
      });
    });
  </script>
</head>
<body>
  <div id="dm">
    <div id="d1">
      <?php require_once "site1.php"; ?>
    </div>
    <div id="d2">
      <h3>here your program</h3>
    </div>
  </div>
</body>
</html>


<!-- file no. 5 -->
<!-- site1.php
 --><!DOCTYPE html>
<html lang="en">
<body>
  <ul>
    <li>
      <a href="p1.php">click on p1</a>
      <a href="p2.php">click on q2</a>
    </li>
  </ul>
</body>
</html>
<!-- p1.php -->
<?php
echo "i am p1 php program";
?>
<!-- p2.php -->
<?php
echo "i am p2 php program";
?>