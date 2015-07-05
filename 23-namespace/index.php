<?php

require 'app/Helpers/StringHelper.php';

$string = '   hello <h1>world</h1>   ';

echo '<pre>';

// method 1
$newHelper1 = new \App\Helpers\StringHelper;
echo $newHelper1->sanitize($string)."\n";

// method 2
use \App\Helpers\StringHelper;
$newHelper2 = new StringHelper;
echo $newHelper2->sanitize($string)."\n";

// method 3 using alias
use \App\Helpers\StringHelper as S;
$newHelper3 = new S;
echo $newHelper3->sanitize($string)."\n";