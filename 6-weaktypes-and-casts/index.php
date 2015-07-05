<?php

echo '<pre>';

// weak type
$var = "0";
var_dump($var);

$var = $var + 2;
var_dump($var);


// casting
$var = $var + 1.3;
var_dump($var);

$cast = (int) $var;
var_dump($cast);

$cast = (bool) $var;
var_dump($cast);

$cast = (float) $var;
var_dump($cast);

$cast = (string) $var;
var_dump($cast);

$cast = (array) $var;
var_dump($cast);

$cast = (object) $var;
var_dump($cast);

echo '</pre>';

?>