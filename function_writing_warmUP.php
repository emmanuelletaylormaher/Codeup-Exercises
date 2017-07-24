<?php

//function that takes in a string and regardless of the case of the input string characters, returns the string with only the first letter capitalized.

function capitalize($input) {
 	return ucfirst($input).PHP_EOL;
}

capitalize("eggs");


//write a function that takes in two argument of $firstName and $lastName and returns a greeting to the name passed into the function like, "Hello, Justin Reich!". If either or both arguments is not a string, return the error "Sorry, two valid names where not given."

function sayHi ($firstName, $lastName) {
	if (is_string($firstName) && is_string($lastName)) {
		return "Hello, {$firstName} {$lastName}!";
	} else {
		return "Sorry, two valid names were not given.";
	}
}

sayHi("Emmanuelle", "Maher").PHP_EOL;