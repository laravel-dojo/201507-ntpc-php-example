<?php

echo '<pre>';

// from official document
function cube($n) {
	return ($n * $n * $n);
}

$result = array_map('cube', [1, 2, 3, 4, 5]);
var_dump($result);

// use anonymous function
$result = array_map(function($n) {
	return ($n * $n * $n);
}, [1, 2, 3, 4, 5]);
var_dump($result);

// pass variable to callback
$base = 2;

$result = array_map(function($n) use ($base) {
	return $n * $base;
}, [1, 2, 3]);
var_dump($result);
