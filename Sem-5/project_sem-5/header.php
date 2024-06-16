<?php
require_once("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
                            echo '<a class="nav-link link" href="logout.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Logout</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="register.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Register</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropstart">
                <button class="user" style="border: none;color: white !important;background-color: #A0C49D;font-size:large;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`"><strong>User</strong></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </nav>
    </div>
</body>