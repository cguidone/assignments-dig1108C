<?php

// Adds two numbers together

function add ($num1, $num2) {
     $total = $num1 + $num2;
     return $total;
}

// Subtract two numbers

function sub ($num1, $num2) {
     $total = $num1 - $num2;
     return $total;
}

// Multiply two numbers

function multi ($num1, $num2) {
     $total = $num1 * $num2;
     return $total;
}

// Divide two numbers

function div ($num1, $num2) {
     $total = $num1 / $num2;
     return $total;
}


$a = 5;
$b = 10;
$operation = 2;

// add = 1, sub = 2, multi = 3, div = 4

if ($operation==1) echo add($a, $b);
if ($operation==2) echo sub($a, $b);
if ($operation==3) echo multi($a, $b);
if ($operation==4) echo div($a, $b);

?>
