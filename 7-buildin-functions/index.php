<?php

echo '<pre>';

$string = "Hello, world";
echo strlen($string)."\n";

$search = 'world';
$replace = 'dolly';
echo str_replace($search, $replace, $string)."\n";

echo '</pre>';

?>