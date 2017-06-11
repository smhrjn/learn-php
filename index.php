<?php

	$greeting = "from index";
	$name = 'its me';

	/*
		// Array
		$names = ['name1', 'name2', 'name3'];
		$names[] = 'name4';
		<ul>
			<?php foreach ($names as $name) : ?>
				<li> <?= $name ?> </li>
			<?php endforeach; ?>
		</ul>
	*/

	/*
		// Associative Array
		$person = [
			'name' => 'someone',
			'age' => 31,
			'hair' => 'brown'
		];
		$person['career'] = 'web';
		unset($person['age']);
		echo '<pre>';
		var_dump($person);
		echo '</pre>';
		<ul>
			<?php foreach ($person as $key => $value) : ?>
				<li> <?= $key ?> : <?= $value ?> </li>
			<?php endforeach; ?>
		</ul>
	*/

	/*
		$task = [
			'title' => 'do it',
			'due' => 'today',
			'completed' => true
		];
		<ul>
			<li>
				<strong>Name: </strong><?= ucwords($task['title']) ?>
			</li>
			<li>
				<strong>Status: </strong><?= $task['completed'] ? 'completed' : 'incomplete' ?>
			</li>
		</ul>
	*/

	// die();

	require 'index.view.php';

?>
