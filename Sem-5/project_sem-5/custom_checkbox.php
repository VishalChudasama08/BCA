<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Checkbox</title>
    <style>
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
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>
    <img src="" style="" alt="">
    <label class="custom-checkbox">
        <input type="checkbox" id="checkbox" />
        <span class="checkmark"></span>
        Check me
    </label>
</body>

</html>