<?php

echo '<pre>';

$int = 1234;
var_dump($int);

$int = -1234;
var_dump($int);

$float = 1234.56;
var_dump($float);

$boolean = true;
var_dump($boolean);

$string = 'hello, world';
var_dump($string);

$array53 = array(1, 2, 3, 4, 5);
var_dump($array53);

$array54 = [
	['id' => 1, 'name' => 'Tom'],
	['id' => 2, 'name' => 'Simon'],
];
var_dump($array54);

require 'MyObj.php';
$object = new MyObj;
$object->method();
var_dump($object);

$handle = fopen('MyObj.php', 'r');
var_dump($handle);

echo '</pre>';

?>
