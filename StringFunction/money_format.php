<?php
$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
echo money_format("The price is %i", $number);
?>