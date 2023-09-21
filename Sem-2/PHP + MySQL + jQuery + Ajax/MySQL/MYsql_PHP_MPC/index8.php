<?php require_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title></title>
  <style>
    .grid2 {
      display: grid;
      grid-template-columns: 1fr 3fr;
      grid-column-gap: 0px;
    }

    body {
      border: 2px solid black;
      background-color: #5cdbd9;
      font-family: 'Bree Serif';
    }

    .sidebar {
      padding: 10px;
      border-right: 2px solid black;
      background-color: #d1d669;
    }

    .antion {
      padding: 10px;
      background-color: #a2e882;
    }

    .h3main {
      text-align: center;
      margin: 0px;
      padding: 0px;
    }
  </style>
</head>

<body>
  <div id="main">
    <div class="grid2">
      <div class="sidebar">
        <span>Present Data Bases : </span>
        <hr>
        <!--<?php require_once "database_list.php"; ?>
        <?php require_once "sidebar.php"; ?>-->
        <form method="post">
          <ul>
            <li>Default selected database : <?= $selected_database; ?></li>
          </ul>
          <ul class="ul">
            <li>Database
              <ul>
                <li><a href="database_create-or-delete.php" data-target="content">Create and Delete</a></li>
              </ul>
            </li>

            <li>Table
              <ul>
                <li><a hrf="create_new_table.php" data-target="content">Table Create</a></li>
                <li><a hrf="delete_table.php" data-target="content">Table Delete</a></li>
                <li><a hrf="show_all_tables.php" data-target="content">See All Tables</a></li>
                <li><a hrf="show_table_records.php" data-target="content">Show Table Records</li>
                  <li><a hrf="insert_records_in_table.php" data-target="content">Insert Records</a></li>
                  <li><a hrf="delete_records_table.php" data-target="content">Delete Records</a></li>
                </ul>
              </li>
            </ul>
          </form>
        </div>
        <div class="antion">
          <div>
            <h3 class="h3main">Welcome to mysql</h3>
            <hr>
          </div>
          <div id="content"></div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $("a").click(function(event) {
          event.preventDefault(); // prevent default link behavior
          var target = $(this).data("target"); // get the target div ID from the link's data attribute
          var href = $(this).attr("href"); // get the URL from the link's href attribute
          $.ajax({
            url: href,
            dataType: "html",
            success: function(response) {
              $("#" + target).html(response); // replace the target div's content with the loaded HTML
            },
            error: function(xhr, status, error) {
              console.log("Error loading content: " + error);
            }
          });
        });
      });
    </script>
  </body>

</html>