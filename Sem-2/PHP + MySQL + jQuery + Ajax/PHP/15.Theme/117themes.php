<?php require ("117colors.php"); ?>
<html>
<body>
  <h4>PHP Color Theme</h4>
  <form method="post" >
    <table>
      <tr>
        <?php
        foreach ($bgcolor as $k => $v) {
          echo "<td>";
          echo "<div id='div' style='background:".$bgcolor[$k].";Color: ".$text[$k].";font-family:".$font[$k].";width: 150px;height: 100px;border-radius: 10px;'>Text Theme</div>";
          echo "<input type='radio' name='themenumber' value='".$k."'>Theme-".($k + 1);
          echo "</td>";
        }
        ?>
      </tr>
    </table>
    <button type="submit" name="submit" value="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;display: block;position: relative;margin: 0px auto;"><strong>Submit</strong></button>
  </form>
  <?php
  if(isset($_POST['submit'])){
	$time = time() + (2 * 60 * 60);
    setcookie("theme", $_POST['themenumber'], $time);
    echo "Theme Changed";
  }
  ?>
</body>
</html>