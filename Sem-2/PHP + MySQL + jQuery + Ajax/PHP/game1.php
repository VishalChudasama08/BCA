<html>
	<body bgcolor="#4e301f" text="red" style="font-size: 5rem">
	<?php
		$a = ['Emma', 'Olivia', 'Noah', 'Liam', 'Ethan', 'Ava', 'Isabella', 'Sophia', 'Mia', 'Charlotte', 'Amelia', 'Harper', 'Evelyn', 'Abigail', 'Emily', 'Elizabeth', 'Sofia', 'Avery', 'Ella', 'Scarlett', 'Grace', 'Chloe', 'Victoria', 'Riley', 'Aria', 'Lillian', 'Adalynn', 'Hazel', 'Brooklyn', 'Kaylee', 'Annabelle', 'Natalie', 'Leah', 'Aaliyah', 'Nevaeh', 'Piper', 'Audrey', 'Brooklynn', 'Juliette', 'Layla', 'Jocelyn', 'Kimberley', 'Natalie', 'Kylee', 'Arianna', 'Harper', 'Skylar', 'Audrey', 'Mya', 'Kensley'];
		$count = count($a);
		$rand = rand(0, ($count-1));
		$keys = str_shuffle($a[$rand]);
		echo $keys;
	?>
	</body>
</html>