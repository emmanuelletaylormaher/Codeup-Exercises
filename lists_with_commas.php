<?php

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark';

$famousFakeArray = explode(", ", $famousFakePhysicists);



 function humanizedList($array, $input = false){
 	if (gettype($input) === boolean){
 			if ($input === true){
			 	foreach ($array as $key => $value) {
			 		asort($array);
		 		}
 			}
 	}
 		
 	$humanizedList = implode(", ", $array);

 	echo "Some of the most famous fictional theoretical physicists are {$humanizedList}.".PHP_EOL;
 }

 humanizedList($famousFakeArray, true);
