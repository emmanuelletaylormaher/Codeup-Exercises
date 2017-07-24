<?php

function howMany($input){
	if ($input == ""){
		echo "Value cannot be empty.".PHP_EOL;

	} else if (is_string($input)){
		echo "You have entered {$input}".PHP_EOL;
		foreach (count_chars($input, 1) as $key => $value) {
			echo "There are {$value} occurences of ". chr($key). " in the string".PHP_EOL;
		}
	} else {
		echo "Please enter a string.".PHP_EOL;
		die;
	}
}

howMany("emmanuelle");