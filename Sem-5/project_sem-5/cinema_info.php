<?php
require_once("connect.php");
$cinema_id = $_GET['cinema_id'];
$cinema_query = "SELECT * FROM `cinema` WHERE id=" . $cinema_id . ";";
$cinema_records  = mysqli_query($conn, $cinema_query);
$cinema_row = mysqli_fetch_assoc($cinema_records);
?>
<div class="container" style="border-radius: 10px;border: 2px solid black;">
    <table class="table">
        <tr>
            <th>Cinema Name</th>
            <th>Facilities</th>
            <th>Location <span class="close">&times;</span></th>
        </tr>
        <tr>
            <td><?= $cinema_row['name']; ?></td>
            <td><?= $cinema_row['facilities']; ?></td>
            <td><?= $cinema_row['location']; ?></td>
        </tr>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('.close').click(function() {
            $('#cinema-info-modal').hide();
        });
    });
</script>