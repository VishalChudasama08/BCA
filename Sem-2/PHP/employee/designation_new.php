  <?php require_once("connect1.php"); ?>
  <html>

  <body>
    <?php require_once("menu.php") ?>
    <form method="post" action="designation_mysqli.php">
      designation Name : <input type="text" name="designation" required />
      <input type="submit" name="submit" value="Save" />
    </form>
  </body>

  </html>