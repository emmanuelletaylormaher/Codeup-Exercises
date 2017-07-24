<?php

// TODO: Create your inspect() function here

function inspect($input) {
	switch(gettype($input)) {

		case "string":
			if ($input !== ""){
				echo "The string reads '{$input}'.".PHP_EOL;	
			} else {
				echo "This string is empty.".PHP_EOL;
			}
		break;

		case "array":
			echo "This value is an array.".PHP_EOL;
			foreach ($input as $key => $value) {
				if ($value == "") {
					echo "This array is empty.".PHP_EOL;
				} else {
			 		echo "Key {$key} reads as {$value}.".PHP_EOL;	
				}
			}
		break;

		case "boolean":
			if ($input == true) {
				echo "The boolean reads true.".PHP_EOL;
			} else {
				echo "The boolean reads false.".PHP_EOL;
			}
		break;

		case "integer":
		echo "The integer reads {$input}.".PHP_EOL;
		break;

		case "double":
		echo "The double reads {$input}.".PHP_EOL;
		break;

		case "NULL":
		echo "This value is null.".PHP_EOL;
		break;
	}
	echo "+++++++".PHP_EOL;
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;

inspect($array2) . PHP_EOL;



