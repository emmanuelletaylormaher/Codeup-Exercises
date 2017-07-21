<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b){
	return $a % $b;
}


echo add(333, 333).PHP_EOL;
echo "++++++".PHP_EOL;
echo subtract(999, 333).PHP_EOL;
echo "++++++".PHP_EOL;
echo multiply(222, 3).PHP_EOL;
echo "++++++".PHP_EOL;
echo divide(1332, 2).PHP_EOL;
echo "++++++".PHP_EOL;
echo modulus(1333, 667).PHP_EOL;
echo "++++++".PHP_EOL;