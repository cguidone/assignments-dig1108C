<?php

$array = array();

$array[0] = array(1, 2, 3, 4);

// Array 0 - 1
		 1 - 2
		 2 - 3
		 3 - 4

$array[1] = array(1, 7, 3, 4);

// Array 0 - 1
	     1 - 7
	     2 - 3
	     3 - 4
	     
$array[2] = array(1, 7, 3, 11);

// Array 0 - 1
		 1 - 7
		 2 - 3
		 3 - 11

unset($array[2]);

echo "<pre>";
print_r($array);

?>

https://github.com/chemiker/ADNCC/blob/a64faed28daf05d3508eecabb90ed0a6fa3f9b6d/test.php