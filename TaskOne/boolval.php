<?php 
echo '0: '.(boolval(5) ? 'true' : 'false') . '</br>';
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "\n";
echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."\n";
echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";
echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."\n";

?>


