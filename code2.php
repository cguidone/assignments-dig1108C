<?php

// 1. User enters a number between 1-100
// 2. Computer randomly selects a number 1-100
// 3. The values of the two numbers are compared
// 4. If the user number is higher than the computer number, they win
// 5. If the user number is lower, they lose
// 6. If the numbers are the same they draw
// 7. The outcome of the hand is displayed
// 8. The running total of each hand is displayed


// User Number
function usernum() {
	$usernum = 50;
	if ($usernum <= 100 && $usernum >= 1) {
		return $usernum;
	} else {
		echo "Invalid User Number";
	}
}

// Computer Random Number
function compnum() {
	$compnum = rand(1, 100);
	return $compnum;
}

$a = usernum();
$b = compnum();
 
// Compare User and Computer Number

function compare($usernum, $compnum) {
	if ($usernum > $compnum) {
		$result = "Winner";
	} elseif ($usernum < $compnum) {
		$result = "Loser";
	} elseif ($usernum == $compnum) {
		$result = "Draw";
	} else {
		$result = "Error";
	}
	return $result;	
}

$c = compare($a, $b);

function display($a, $b, $result) {
	return 'User: ' . $a . ' Computer: ' . $b . ' Outcome: ' . $result;
	
}


echo display($a, $b, $c);
