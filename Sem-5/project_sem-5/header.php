<?php
require_once("connect.php");
session_start();
if (!isset($_SESSION['login'])) {
    if (!isset($_GET['login'])) {
        header("location:login.php?login=yes");
        exit();
    } else {
        // header("location:login.php");
        // exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .modal {
            position: fixed;
            top: 50%;
            right: 50%;
        }

        .cinema-info-modal {
            max-width: 800px;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 30px;
            font-weight: bold;
            margin-top: -12px;
            padding: 0px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-flued mb-3">
        <nav class="navbar navbar-expand-md navbar-dark py-1">
            <a class="navbar-brand" href="index.php">
                <img src="images/theme_3_logo.jpg" class="v8logo navbar-toggler-icon" alt="Logo">&nbsp&nbsp
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="display: flex;">
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`" style="color: white !important;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="about.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="contact.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Contact</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (!isset($_SESSION['login'])) {
                            echo '<a class="nav-link link" href="login.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Login</a>';
                        } else {
                            echo '<a class="nav-link link" href="#" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`" onclick="logout()">Logout</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="register.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Register</a>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <div class="dropdown dropstart me-3">
                    <button class="user" style="border: none;color: white !important;background-color: grey !important;font-size:large;padding: 5px 6.2px !important;border-radius: 18px !important;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`" size><strong>CV</strong></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <!-- onclick="myProfile()" -->
                        <li><a class="dropdown-item" href="#">Booking History</a></li>
                    </ul>
                </div>
            <?php
            }
            ?>
        </nav>
    </div>
    <div id="cinema-info-modal" class="modal">
        <div class="cinema-info-modal">
            <div id="cinema-info"></div>
        </div>
    </div>
</body>
<script>
    function logout() {
        let res = confirm("Are you sure! You want to log out ?");
        if (res) {
            sessionStorage.clear();
            window.location.href = "logout.php";
        }
    }

    // ++++++++++++++++++++++++ modify first for myProfile than run/uncomment +++++++++++++++++++++++++++

    // function myProfile(cinema_id) {
    //     $.get('cinema_info.php?cinema_id=' + cinema_id, function(data) {
    //         $('#cinema-info').html(data);
    //         $('#cinema-info-modal').show();
    //     });
    // }

    // $(document).ready(function() {
    //     $(window).click(function(event) {
    //         if (event.target.id === 'cinema-info-modal') {
    //             $('#cinema-info-modal').hide();
    //         }
    //     });
    // })

    // set ids in post method
    function postIds(file, ids, form_exist) {
        let form;

        if (form_exist == true) {
            form = document.getElementById('existingForm');
        } else {
            form = document.createElement('form');
            form.method = 'POST';
            form.action = file;
        }

        ids.forEach(element => {
            let parts = element.split(':');
            console.log(parts);
            let id_name = parts[0];
            let id = parts[1];

            // it is Create input element
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = id_name;
            input.value = id;

            // set input tag as from append childs 
            form.appendChild(input);
        });

        // set form tag as body append child
        document.body.appendChild(form);

        form.submit();
    }
</script>