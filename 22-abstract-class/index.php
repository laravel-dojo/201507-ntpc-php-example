<?php

require 'Animal.php';
require 'Swimmable.php';
require 'Dog.php';

echo '<pre>';

// Fatal error:  Cannot instantiate abstract class Animal
// $lucky = new Animal('Lucky');

$lucky = new Dog('Lucky');
$lucky->move(10, 10);