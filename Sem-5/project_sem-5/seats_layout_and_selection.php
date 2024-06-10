<?php

use function PHPSTORM_META\type;

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
    <?php include_once("footer.php"); ?>