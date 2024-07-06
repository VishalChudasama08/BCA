<?php
require_once("connect.php");

$user_id = $_SESSION['user_id'];
$users_query = "SELECT * FROM `users` WHERE id=" . $user_id . ";";
$user_row = mysqli_fetch_assoc(mysqli_query($conn, $users_query));

$booking_history_query = "SELECT * FROM bookings WHERE user_id = " . $user_id . ";";
$booking_history_records = mysqli_query($conn, $booking_history_query);

?>
<div class="container">
    <div class="card mx-auto " style="min-width: 300px;max-width: 600px;">
        <div class="card-header text-center h5" id="user_head">User Information</div>
        <div class="card-body" id="disabled_info">
            <div class="mb-3">
                <?php
                if (isset($_GET['profile']) && $_GET['profile'] == 'update') {
                    echo "<p style='color: green;'>Profile Information Update Successfully...</p>";
                }
                ?>
                <label for="name" class="form-label">Name :</label>
                <input type="name" class="form-control" id="name" name="name" value="<?= $user_row['name'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user_row['email'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="mNumber" class="form-label">Mobile Number :</label>
                <input type="number" class="form-control" id="mNumber" name="mNumber" value="<?= $user_row['mobile_number'] ?>" disabled>
            </div>
        </div>
        <div class="card-body" id="edit_info">
            <form action="update_profile.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="name" class="form-control" id="name" name="name" value="<?= $user_row['name'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user_row['email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number :</label>
                    <input type="number" class="form-control" id="mobile_number" name="mobile_number" value="<?= $user_row['mobile_number'] ?>" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" id="update" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card mx-auto" id="history_table"> <!-- style="position: absolute;top: 60px;" -->
        <div class="card-header text-center h5" id="user_head">Booking History</div>
        <div class="card-body">
            <!-- <table class="table">
            <tr class="table" id="booking_head">
                <th>Booking History</th>
            </tr>
        </table> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Cinema Name</th>
                        <th scope="col">Booked Seats</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows_counter = 1;
                    while ($booking_history_row = mysqli_fetch_assoc($booking_history_records)) {
                        $movie_id = $booking_history_row['movies_id'];
                        $cinema_id = $booking_history_row['cinema_id'];
                        $booked_seats = $booking_history_row['number_of_seats'];
                        $price = $booking_history_row['total_price'];
                        // Date formatting
                        $booking_date = implode("/", array_reverse(explode("-", explode(" ", $booking_history_row['booking_date'])[0])));

                        $movies_query = "SELECT * FROM movies WHERE id = '" . $movie_id . "';";
                        $booking_history_row = mysqli_fetch_assoc(mysqli_query($conn, $movies_query));
                        $movie_name = $booking_history_row['title'];

                        $cinema_query = "SELECT * FROM cinema WHERE id = '" . $cinema_id . "';";
                        $cinema_row = mysqli_fetch_assoc(mysqli_query($conn, $cinema_query));
                        $cinema_name = $cinema_row['name'];
                    ?>
                        <tr>
                            <th scope="row"><?= $rows_counter ?></th>
                            <td><?= $movie_name ?></td>
                            <td><?= $cinema_name ?></td>
                            <td><?= $booked_seats ?></td>
                            <td><?= $price ?></td>
                            <td><?= $booking_date ?></td>
                        </tr>
                    <?php
                        $rows_counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex mb-3 justify-content-evenly pt-2">
        <button class="btn btn-primary" id="edit">Edit Profile</button>
        <button class="btn btn-primary" id="cancel">Cancel</button>
        <button class="btn btn-primary" id="booking_history">Booking History</button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#edit_info').hide();
        $('#history_table').hide();
        $('#booking_head').hide();
        $('#update').hide();
        $('#cancel').hide();
        $('#edit').click(function() {
            $('#disabled_info').hide();
            $('#history_table').hide();
            $('#booking_head').hide();
            $('#user_head').show();
            $('#edit_info').show();
            $('#edit').hide();
            $('#update').show();
            $('#cancel').show();
        });
        $('#cancel').click(function() {
            $('#edit_info').hide();
            $('#history_table').hide();
            $('#booking_head').hide();
            $('#user_head').show();
            $('#disabled_info').show();
            $('#update').hide();
            $('#edit').show();
            $('#cancel').hide();
        });
        $('#booking_history').click(function() {
            $('#disabled_info').hide();
            $('#edit_info').hide();
            $('#user_head').hide();
            $('#booking_head').show();
            $('#history_table').show();
            $('#cancel').show();
        });
    });
</script>