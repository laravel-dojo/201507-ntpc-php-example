<?php

require 'Animal.php';
require 'Swimmable.php';
require 'Dog.php';
require 'Cat.php';
require 'Human.php';

echo '<pre>';

$dog = new Dog;
echo 'dog is ';
$dog->swim();
echo "\n";

$cat = new Cat;
echo 'cat is ';
$cat->swim();
echo "\n";

$human = new Human;
echo 'human is ';
$human->swim();
echo "\n";
