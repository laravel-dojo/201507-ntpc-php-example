<?php

echo '<pre>';

function greeting($name = 'Simon', $words = ['Hi']) {
	$index = rand(0, count($words) - 1);
	$sentence = $words[$index].', '.$name;

	return $sentence."\n";
}

echo greeting('Tom', ['Hola', 'Hello', 'Good Morning']);
echo greeting();

echo '</pre>';

?>