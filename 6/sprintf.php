<?php


$name = 'Alex';
$age  = 10;

$maxLength = strlen($name);
//printf("Hello, %" . $maxLength . "s! I'm %d y.o.\n", $name, $age);
//echo 'Hello, '. $name . "! I'm " . $age;

echo sprintf("Hello, %10s! I'm %d y.o.! My friend is %s\n", $name, $age, 'Mike');

