<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="javascript/jquery/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script> -->

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="css/ajax_libs_font-awesome_6.5.2/ajax_6.5.2_all.min.css"> -->
    <style>
        #header {
            position: sticky;
            top: 0px;
            z-index: 1;
        }

        #my_profile {
            width: 85vw;
            height: 83vh;
            position: fixed;
            /* border: 1px solid black; */
            right: 6.6vw;
            top: 9.5vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-y: scroll;
        }

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

        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-flued mb-2" id="header">
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
                        <a class="nav-link link" href="register.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Register</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['login']) || isset($_SESSION['admin'])) {
                            $uri = $_SERVER['REQUEST_URI']; // return running url (not full url)
                            $file_url = explode('/', $uri);
                            $count = count($file_url);
                            $file_name_with_extension = $file_url[$count - 1];
                            $file_name = explode(".", $file_name_with_extension)[0];
                            $_SESSION['file_name'] = $file_name;
                            echo '<a class="nav-link link" href="#" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`" onclick="logout()">Logout</a>';
                        } else {
                        ?>
                            <div class="btn-group" style="padding-top: .20rem;">
                                <button class="dropdown-toggle p-1 px-2" type="button" style="color: white !important;border:none;border-radius:8px;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`" data-bs-toggle="dropdown" aria-expanded="false">
                                    Logins
                                </button>
                                <ul class="dropdown-menu p-0 border-3" style="background-color: #A0C49D;">
                                    <li>
                                        <a class="nav-link link" href="login.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">User login</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider border-3 m-0">
                                    </li>
                                    <li>
                                        <a class="nav-link link" href="admin/admin_login.php" style="color: white !important;" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">Admin login</a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['login'])) { // use form on provide, add user name first characater
                // $user_id = $_SESSION['user_id'];
                // $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE id=" . $user_id . ";"));
                // $name = $row['name'][0];
            ?>
                <div class="dropdown dropstart me-3">
                    <button class="user" style="border: none;color: white !important;background-color: white !important;font-size:large;border-radius: 100% !important;width:40px;height: 40px;" type="button" id="show_profile" onmouseover="this.style.color=`yellow`" onmouseout="this.style.color=`white`">
                        <img src="images/user-solid.svg" alt="user icon" style="margin:2px;">
                    </button>
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
    $(document).ready(function() {
        $('#my_profile').hide();
        $('#show_profile').click(function() {

            if ($('#show_movies').is(':hidden')) {
                $('#footer').css({
                    'position': 'relative',
                    'bottom': '0px'
                });
            } else {
                $('#footer').css({
                    'position': 'absolute',
                    'bottom': '0px'
                });
            }

            $('#show_movies').toggle();
            $('#my_profile').toggle();
            // $('#my_profile').toggle();
        });

    });

    function logout() {
        let res = confirm("Are you sure! You want to log out ?");
        if (res) {
            sessionStorage.clear();
            window.location.href = "logout.php";
        }
    }

    // set ids in post method
    function postIds(file, ids, form_exist) {
        let form;
        sessionStorage.setItem("ids", ids);
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
    console.log(sessionStorage.getItem("ids"))
</script>