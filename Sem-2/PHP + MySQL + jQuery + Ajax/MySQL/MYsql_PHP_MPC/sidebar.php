<?php require "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>

<body>
   <hr>
   <form method="post">
      <ul>
         <li>Default selected database : <?= $selected_database; ?></li>
      </ul>
      <ul class="ul">
         <li>Database
            <ul>
               <li><a href="database_create-or-delete.php">Create and Delete</a></li>
            </ul>
         </li>
         <?php
         /*echo "Using Database is :- ".$usedbname;*/
         // if ($result = mysqli_query($mysqli, "select database()")) {
         //    $row = mysqli_fetch_row($result);
         //    echo $row[0];
         //    if (!empty($row[0])) {
         //       echo "<h4>Default database id : " . $row[0] . "</h4>";
         //    } else {
         //       echo "<h4>No Default database selected</h4>";
         //    }
         // }
         ?>
         <li>Table
            <ul>
               <li><a href="create_new_table.php">Table Create</a></li>
               <li><a href="delete_table.php">Table Delete</a></li>
               <li><a href="show_all_tables.php">See All Tables</a></li>
               <li><a href="show_table_records.php">Show Table Records</li>
               <li><a href="insert_records_in_table.php">Insert Records</a></li>
               <li><a href="delete_records_table.php">Delete Records</a></li>
            </ul>
         </li>
      </ul>
   </form>
</body>

</html>