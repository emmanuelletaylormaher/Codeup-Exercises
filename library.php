<?php

// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.

//DONE
function isEven($input){
	if (is_int($input) === true){
		if ($input %2 == 0){
			return true;
		} else {
			return false;
		}

	} else {
		echo "Please enter a number.".PHP_EOL;
	}
}

// var_dump(isEven(4));

// Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'

//DONE
function isVowel($input){
	$vowel = ["a", "e", "i", "o", "u"];

	if(is_string($input) === true){

		if (strlen($input) === 1) {
		
		$result = array_search($input, $vowel);

			if(is_int($result) === true){
				return true;
			} else {
				return false;
			}

		} else {
			echo "Only one character can be entered.".PHP_EOL;
		}

	} else {
		echo "Please enter a string.".PHP_EOL;
	}
}

// Write a function called "first" that takes in an argument that could be an array or a string. Return the first character if the argument is a string. Return the first element of the array if the input is an array.

//DONE
function first($input){
	$argument = gettype($input);

	switch ($argument) {
		case "string":
			$stringSplit = str_split($input);
			$stringSplit = array_shift($stringSplit);
			return $stringSplit;
			break;
		case "array":
			$arrayFirst = array_shift($input);
			return $arrayFirst;
			break;
		default:
			echo "Please enter either a string or an array.".PHP_EOL;
	}
}

$test = ["hot", "doggy", "dog"];

// Write a function called "second" that takes in input that could be an array or a string. The function should return the second character or element of the input.

//DONE
function second($input){
	$argument = gettype($input);

	switch ($argument) {
		case "string":
			$stringSplit = str_split($input);
			array_shift($stringSplit);
			$secondGuy = array_shift($stringSplit);
			return $secondGuy;
			break;
		case "array":
			array_shift($input);
			$arraySecond = array_shift($input);
			return $arraySecond;
			break;
		default:
			echo "Please enter either a string or an array.".PHP_EOL;
	}
}


// Write a function called "last" that takes in an input that could be an array or a string. Your function should return the last character or element of the input.

//DONE
function last($input){
	$argument = gettype($input);

	switch ($argument) {
		case "string":
			$stringSplit = str_split($input);
			$stringSplit = array_pop($stringSplit);
			return $stringSplit;
			break;
		case "array":
			$arrayLast = array_pop($input);
			return $arrayLast;
			break;
		default:
			echo "Please enter either a string or an array.".PHP_EOL;
	}
}



// Write a function called "reverse" that takes in an input of either a string or an array. Your function should return the elements or characters in reverse order.

//DONE
function reverse($input){
	$argument = gettype($input);

	switch ($argument) {
		case "string":
			$stringSplit = str_split($input);
			krsort($stringSplit);
			$stringSplit = implode("", $stringSplit);
			return $stringSplit;
			break;
		case "array":
			krsort($input);
			return $input;
			break;
		default:
			echo "Please enter either a string or an array.".PHP_EOL;
	}
}


// Write a function called "random" that takes in an input that can be either a string or an array. Your function should return a random element or character from the input.

//DONE
function random($input){
	$argument = gettype($input);

	switch ($argument) {
		case "string":
			$stringSplit = str_split($input);
			shuffle($stringSplit);
			$stringSplit = array_shift($stringSplit);
			return $stringSplit;
			break;
		case "array":
			shuffle($input);
			$random = array_shift($input);
			return $random;
			break;
		default:
			echo "Please enter either a string or an array.".PHP_EOL;
	}
}


$test2 = ["oh", "say", "can", "you", "see"];
var_dump(random($test2));
