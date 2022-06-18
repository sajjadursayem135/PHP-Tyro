<?php
$a = "Hello";
$b = array("red", "green", "blue");
$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$d = [1, 2, 3];


echo "a is " . is_countable($a) . "\n";

echo "b is " . is_countable($b) . "\n";

echo "c is " . is_countable($c) . "\n";

echo "d is " . is_countable($d) . "\n";
?>