<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","k"=>"white");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","k"=>"white");

$result=array_diff($a1,$a2);
print_r($result);
?>