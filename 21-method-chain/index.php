<?php

require 'Animal.php';
require 'Swimmable.php';
require 'Dog.php';

echo '<pre>';

$lucky = new Dog('Lucky');
$lucky->bark()->move(20, 20)->swim();