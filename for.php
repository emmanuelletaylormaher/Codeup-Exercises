<?php

fwrite(STDOUT, "What is the starting number? ");
$startingNumber = trim(fgets(STDIN));
if (! is_numeric($startingNumber)) {
	echo "You must enter a number!".PHP_EOL;
	exit;
}

fwrite(STDOUT, "What is the ending number? ");
$endingNumber = trim(fgets(STDIN));
if (! is_numeric($startingNumber)) {
	echo "You must enter a number!".PHP_EOL;
	exit;
}

fwrite(STDOUT, "What is the increment? ");
$increment = trim(fgets(STDIN));
if (! is_numeric($startingNumber)) {
	echo "You must enter a number!".PHP_EOL;
	exit;
}
 


if ($increment == ""){
	$increment = 1;
}

// if (!is_numeric($startingNumber) \\ !is_numeric($endingNumber) || !is_numeric($increment)){
// 	echo "Inputs aren\'t numeric! Try again." . PHP_EOL;
// 	die;
// }

for($i = $startingNumber; $i < $endingNumber; $i+= $increment){
	echo $i . PHP_EOL;
}


