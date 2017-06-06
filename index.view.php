<!DOCTYPE html>
<html>
<head>
	<title>Learn php</title>
</head>
<body>

	<h1>Learning PHP</h1>

	<?php
		echo "Hello " . "$greeting, $name";
	?>

	<hr>

	<ul>
		<?php foreach ($names as $name) : ?>
			<li> <?= $name ?> </li>
		<?php endforeach; ?>
	</ul>

	<!--<?= htmlspecialchars($_GET['name']) ?>-->

</body>
</html>
