<!DOCTYPE html>
<html lang="en">

<body>
  <?php
  require_once("connect.php");
  $str = $_GET['str'];
  $query  = "SELECT cust_name,cust_code,cust_city FROM `classicmodels`.`order` WHERE cust_name LIKE '%" . $str . "%' OR cust_code LIKE '%" . $str . "%' OR cust_city LIKE '%" . $str . "%';";
  $records = mysqli_query($mysqli, $query);
  ?>
  <table border="2px" style="padding: 2%;">
    <thead>
      <tr>
        <th>Customer Code</th>
        <th>Customer Name</th>
        <th>Customer City</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($records)) {
        ?>
        <tr>
          <td><?= $row['cust_code'] ?></td>
          <td><?= $row['cust_name'] ?></td>
          <td><?= $row['cust_city'] ?></td>
        </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</body>

</html>
<!-- CREATE DATABASE classicmodels;
  
USE classicmodels;

CREATE TABLE `classicmodels`.`order` ( `cust_code` INT(11) NOT NULL , `cust_name` VARCHAR(50) NOT NULL , `cust_city` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `classicmodels`.`order` (cust_code,cust_name, cust_city) VALUES (201, 'John Smith', 'New York'),
(205, 'Emma Watson', 'London'),
(208, 'Robert Johnson', 'Paris'),
(202, 'Mary Lee', 'Tokyo'),
(203, 'David Lee', 'Los Angeles'),
(204, 'Karen Chen', 'Sydney'),
(206, 'Alex Wong', 'Hong Kong'),
(207, 'Olivia Kim', 'Seoul'),
(209, 'Daniel Chen', 'Shanghai'),
(210, 'Julia Park', 'Toronto'),
(211, 'Sarah Lee', 'Vancouver'),
(212, 'Michael Kim', 'San Francisco'),
(213, 'Jennifer Lee', 'Boston'),
(214, 'Steven Chen', 'Houston'),
(215, 'Samantha Lee', 'Chicago'),
(216, 'Kevin Park', 'Washington DC'),
(217, 'Hannah Lee', 'Seattle'),
(218, 'Grace Kim', 'Miami'),
(219, 'Ethan Chen', 'Berlin'),
(220, 'Sophia Lee', 'Dubai'),
(221, 'Joseph Kim', 'Mumbai'),
(222, 'Isabella Lee', 'Beijing'),
(223, 'Jason Chen', 'Moscow'),
(224, 'Ava Kim', 'Rio de Janeiro'),
(225, 'Andrew Lee', 'Bangkok'); -->