<?php

function inputsAreNumeric($a, $b){
	if(is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		return false;
	}
}

function add($a, $b, $strict){
    if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else {
    	return "Error: both arguments must be numbers";
    }
}

function subtract($a, $b, $strict){
    
    return $a - $b;
}

function multiply($a, $b, $strict){
    
    return $a * $b;
}

function divide($a, $b, $strict){
    
    return $a / $b;
}

function modulus($a, $b, $strict){

	return $a % $;
}

//test code
// echo add(333, 333).PHP_EOL;
// echo "++++++".PHP_EOL;
// echo subtract(999, 333).PHP_EOL;
// echo "++++++".PHP_EOL;
// echo multiply(222, 3).PHP_EOL;
// echo "++++++".PHP_EOL;
// echo divide(1332, 2).PHP_EOL;
// echo "++++++".PHP_EOL;
// echo modulus(1333, 667).PHP_EOL;
// echo "++++++".PHP_EOL;