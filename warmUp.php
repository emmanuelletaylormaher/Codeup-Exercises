<?php

$result = 0;
$testArray = [2, 1, -5, "bob"];

foreach ($testArray as $value) {
	if (is_numeric($value)) {
		if ($value < 0) {
			$value= $value * -1;
			echo "the negative integer has been converted to positive integer {$value}".PHP_EOL;
		}

		if ($value%2 == 1){
			$result = $result + $value;
			echo "the odd integer added results in {$result}".PHP_EOL;
		} else if ($value%2 ==0) {
			$result = $result * $value;
			echo "the even number multiplied results in {$result}".PHP_EOL;
		}

	} else if (!is_numeric($value)) {
		echo "{$value} isn't a number and cannot be calculated into the result" .PHP_EOL;
		}
}
echo "The final result is {$result}".PHP_EOL;
