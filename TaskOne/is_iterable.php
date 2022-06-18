<?php
$a = "Hello";
echo "a is " . is_iterable($a) . "\n";

$b = array("red", "green", "blue");
echo "b is " . is_iterable($b) . "\n";

$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "c is " . is_iterable($c) . "\n";

$d = [1, 2, 3];
echo "d is " . is_iterable($d) . "\n";
?>