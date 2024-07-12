<?php
require_once("../connect.php");
$all_user_record = mysqli_query($conn, "SELECT * FROM `users`");
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Register Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rows_counter = 1;
        while ($user_row = mysqli_fetch_assoc($all_user_record)) {
            $name = $user_row['name'];
            $email = $user_row['email'];
            $mobile_number = $user_row['mobile_number'];
            // Date formatting
            $booking_date = implode("/", array_reverse(explode("-", explode(" ", $user_row['date'])[0])));
        ?>
            <tr>
                <th scope="row"><?= $rows_counter ?></th>
                <td><?= $name ?></td>
                <td><?= $email ?></td>
                <td><?= $mobile_number ?></td>
                <td><?= $booking_date ?></td>
            </tr>
        <?php
            $rows_counter++;
        }
        ?>
    </tbody>
</table>