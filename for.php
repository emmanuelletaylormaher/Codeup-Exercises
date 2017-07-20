<?php

fwrite(STDOUT, "What is the starting number? ");
$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, "What is the ending number? ");
$endingNumber = trim(fgets(STDIN));

for($i = $startingNumber; $i < $endingNumber; $i++){
	echo $i . PHP_EOL;
}
