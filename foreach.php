<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $thing) {
		
// 		if (is_int($thing)){
// 			echo $thing.PHP_EOL;
// 		} else if (is_float($thing)){
// 			echo $thing.PHP_EOL;
// 		} else if (is_bool($thing)){
// 			echo $thing.PHP_EOL;
// 		} else if (is_array($thing)) {
// 			foreach ($thing as $otherthings){
// 				echo $otherthings.PHP_EOL;
// 			}
// 		} else if (is_null($thing)) {
// 			echo $thing.PHP_EOL;
// 		} else if (is_null($thing)) {
// 			echo $thing.PHP_EOL;
// 		} else if (is_string($thing)){
// 			echo $thing.PHP_EOL;
// 		}
// 		PHP_EOL.PHP_EOL;
// }

//is it scalar tho?
foreach ($things as $thing){
	if (is_scalar($thing)){
		echo $thing.PHP_EOL;
	} else if (!is_scalar($thing)){
		foreach ($thing as $otherthings) {
			echo $otherthings.PHP_EOL;
		}
	} else {
		PHP_EOL;
	}
}