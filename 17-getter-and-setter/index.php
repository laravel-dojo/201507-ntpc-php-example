<?php

require 'Animal.php';

$animal = new Animal;

echo '<pre>';

// Fatal error
//$animal->name;

// set name and get name
$animal->setName('Lucky');
echo $animal->getName()."\n";

echo '</pre>';