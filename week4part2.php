<?php

$grade = 90;

if ($grade <= 100 && $grade >= 0 ) {

	if ($grade == 100) {
		echo "A+";
		}
	
	else if ($grade >=90) {
		echo "B";
		}
		
	else if ($grade >=80) {
		echo "C";
		}
	
	else if ($grade >=70) {
		echo "D";
		}
	
	else {
		echo "F";
		}
		
}

else {
	echo "Bad Grade";
	}
	
?>
		
	
	