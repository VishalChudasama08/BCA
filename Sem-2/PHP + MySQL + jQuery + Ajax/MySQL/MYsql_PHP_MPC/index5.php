<?php require_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        .grid2 {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-column-gap: 0px;
        }

        body {
            border: 2px solid black;
        }

        .sidebar {
            padding: 10px;
            border-right: 2px solid black;
        }

        .antion {
            padding: 10px;
        }

        .h2main {
            text-align: center;
            height: 21px;
        }
    </style>
</head>

<body>
    <div id="main">
        <div class="grid2">
            <div class="sidebar">
                <span>Present Data Bases : </span>
                <?php require_once "database_list.php"; ?>
                <?php require_once "sidebar.php"; ?>
            </div>
            <div class="antion">
                <h2 class="h2main">Welcome to mysql</h2>
                <hr>
            </div>
        </div>
    </div>
</body>

</html>