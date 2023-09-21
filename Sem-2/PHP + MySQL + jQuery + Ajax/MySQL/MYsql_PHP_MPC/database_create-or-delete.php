<html>

<body>
	<form method="post">
		<p>Present Data Bases : </p>
		<?php require "database_list.php"; ?>
		<hr>
		<label>Enter Database name : </label>
		<input type="text" name="dbname" required><br>
		<input type="radio" id="create" name="conctrol" value="create" required> Create
		<input type="radio" id="delete" name="conctrol" value="delete" required> Delete

		<input type="submit" value="submit" name="submit">
	</form>
	<?php
	require "database_mysql.php";
	?>

</body>

</html>