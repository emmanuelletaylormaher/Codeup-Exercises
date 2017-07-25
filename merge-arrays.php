<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function isInArray($needle, $haystack) {
	
	$result = array_search($needle, $haystack);

	if ($result === false){
		return false;
	} else {
		return true;
	}
}

if(isInArray("Tina", $names)){
	echo "Tina is in the array". PHP_EOL;
} else {
	echo "Tina ain't in the array" . PHP_EOL;
}

if(isInArray("Bob", $names)){
	echo "Bob is in the array". PHP_EOL;
} else {
	echo "Bob ain't in the array" . PHP_EOL;
}


// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function numberOfValuesInCommon($array1, $array2){
	$count = 0;
	foreach ($array1 as $value) {
		if (isInArray($value, $array2)) {
			$count++;
		}

	}

	return $count;
}

echo "The number of values that \$names and \$compare have in common is " . numberOfValuesInCommon($names, $compare). PHP_EOL;


// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.


// If the arrays have the same value at the same index, then it should only be added once.


// If the values differ, then the value from the first array should be added and then the second.


// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().


function combine_arrays($array1, $array2){
	$combined = [];

	foreach ($array1 as $key => $value) {
		if ($array1[$key] === $array2[$key]) {
			array_push($combined, $array1[$key]);
		} else {
			array_push($combined, $array1[$key], $array2[$key]);
		}
	}

	return $combined;
}

// Test your combine_arrays() function with $names and $compare.

print_r(combine_arrays($names, $compare));

