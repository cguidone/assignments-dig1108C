<?php

$number = 1;

while ($number <11 ) {
  echo "$number";
  echo " ";
  $number++;
  }
 
  
$students = array ( A, B, C,);

$max = count($students);

echo "<br>max value = $max<br>";

$count = 1;

foreach ($students as $st) {
	echo $st;
 if ( $count < $max ) {	
	echo ", ";
	$count++;
}	
}

?>