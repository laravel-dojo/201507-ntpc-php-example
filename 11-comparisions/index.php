<?php

echo '<pre>';

// part 1
$x = 20;
var_dump($x > 20);
var_dump($x >= 20);
var_dump($x < 20);
var_dump($x <= 20);

echo "\n\n";

var_dump($x == 20);
var_dump($x != 20);

echo "\n\n";

// part 2
$int = 22;
$bool = false;

var_dump(!$bool);

echo "\n\n";

var_dump($int > 0 && $int < 50);
var_dump($int > 0 || $int < 20);

echo "\n\n";

echo '</pre>';

?>