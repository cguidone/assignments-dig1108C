<?php

// Is the Restraunt Open?

// Open 9 am
$open_time = 9;

// Close 10 pm 
$close_time = 22;

// Closing Soon Time 8 pm
$closing_time = 20;

// Current Time
$current = 21;

if ( isset( $current) ) {

	if ($current >= $open_time && $current < $close_time) {
 	
	if ($current >= 20) {
		echo "Closing Soon";
	}
	
	else {
		echo "Open";
	}
	
	} else {
	echo "Closed";
    }
	
}
?>
