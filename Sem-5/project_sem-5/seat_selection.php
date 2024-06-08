<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .seat-layout {
            display: flex;
            flex-wrap: wrap;
            width: 300px;
            margin: auto;
            padding-top: 50px;
        }

        .seat {
            width: 30px;
            height: 30px;
            margin: 5px;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .available {
            background-color: #2ecc71;
        }

        .booked {
            background-color: #e74c3c;
        }

        .selected {
            background-color: #f1c40f;
        }

        /* Hide the default checkbox */
        .custom-checkbox input[type="checkbox"] {
            display: none;
        }

        /* Create a custom checkmark */
        .custom-checkbox {
            display: inline-block;
            cursor: pointer;
            user-select: none;
            padding-left: 25px;
            position: relative;
            font-size: 18px;
        }

        /* Create the checkmark/indicator (hidden by default) */
        .custom-checkbox .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #ccc;
            border-radius: 4px;
        }

        /* When the checkbox is checked, add a blue background */
        .custom-checkbox input:checked+.checkmark {
            background-color: #2196F3;
        }

        /* Add some animation to the checkmark */
        .custom-checkbox .checkmark {
            transition: background-color 0.2s ease;
        }
    </style>
</head>

<body>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A1
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A2
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A3
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A4
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A5
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A6
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A7
    </label>
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        A8
    </label>

    <?php

    $show_id = $_GET['show_id'];
    $result = $conn->query("SELECT sc.seat_structure, sc.booked_seats, th.name as theater_name, th.location as theater_location 
                        FROM screens sc 
                        JOIN shows sh ON sc.id = sh.screen_id 
                        JOIN theaters th ON sc.theater_id = th.id
                        WHERE sh.id = $show_id");

    $seat_data = $result->fetch_assoc();
    $seat_structure = explode(',', $seat_data['seat_structure']);
    $booked_seats = explode(',', $seat_data['booked_seats']);
    ?>

    <h2>Select Your Seats</h2>
    <div class="seat-layout">
        <?php
        foreach ($seat_structure as $seat) {
            $class = in_array($seat, $booked_seats) ? 'booked' : 'available';
            echo "<div class='seat $class' data-seat='$seat'>$seat</div>";
        }
        ?>
    </div>
    <button id="bookSeats">Book Seats</button>

    <script>
        document.querySelectorAll('.seat.available').forEach(seat => {
            seat.addEventListener('click', () => {
                seat.classList.toggle('selected');
            });
        });

        document.getElementById('bookSeats').addEventListener('click', () => {
            const selectedSeats = Array.from(document.querySelectorAll('.seat.selected'))
                .map(seat => seat.dataset.seat);

            fetch('book_seats.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        user_id: <?= $_SESSION['login'] ?>, // Get this from the session
                        show_id: <?= $show_id ?>,
                        seats: selectedSeats
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    if (data.status === 'success') {
                        window.location.href = `ticket_layout.php?booking_id=${data.booking_id}`;
                    }
                });
        });
    </script>
</body>
<?php include_once("footer.php"); ?>