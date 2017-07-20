<?php

//write a program that prints numbers from 1-100

for ($i = 1; $i <= 100; $i++){
	if ($i%5 === 0 && $i%3 === 0){
		echo "FizzBuzz".PHP_EOL;
	} else if ($i%3 === 0) {
		echo "Fizz".PHP_EOL;
	} else if ($i%5 === 0) {
		echo "Buzz".PHP_EOL;
	} else {
		echo $i.PHP_EOL;
	}
}

//if the number is a multiple of 3, it should print "fizz" instead

//if the number is a multiple of 5, it should print "buzz"