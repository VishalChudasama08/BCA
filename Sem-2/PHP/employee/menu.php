<?php require_once "connect1.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center; font-size: 125%;">
        <a href="menu.php" onclick="loadDoc(this.value)">Home</a> |
        <a href="department.php" onclick="loadDoc(this.value)">Department</a> |
        <a href="designation.php" onclick="loadDoc(this.value)">Designation</a> |
        <a href="allowance.php" onclick="loadDoc(this.value)">Allownce</a> |
        <a href="employee.php" onclick="loadDoc(this.value)">Employee</a> |
        <a href="salary.php" onclick="loadDoc(this.value)">Salary</a>
    </div>
    <div id="new"></div>
</body>
<script>
  function loadDoc(s) {
    const v = new XMLHttpRequest();
    v.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("new").innerHTML = this.responseText;
      }
    };
    v.open("GET", "customer.php?str=" + s + "");
    // document.write(v);
    v.send();
  }
</script>
</html>