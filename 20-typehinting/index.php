<?php

require 'Human.php';
require 'Animal.php';
require 'Swimmable.php';
require 'Dog.php';
require 'Cat.php';

echo '<pre>';

$tom = new Human('Tom');
echo $tom->greeting(['Hola', 'Good Morning'])."\n";

echo "\n\n";

$lucky = new Dog('Lucky');
echo $tom->swimWith($lucky)."\n";

$cooper = new Cat('Cooper');
echo $tom->swimWith($cooper)."\n";

echo '</pre>';