<?php

//the array that the loop will be referring to
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

//Update your loop to only show books that were written after 1950.

foreach ($books as $key => $book) {
	if ($book["published"] > 1950 && $book["pages"] > 300) {
	echo "The book's title is {$key}".PHP_EOL;
		foreach ($book as $key => $stats) {
			echo "{$key}: {$stats}".PHP_EOL;	
		}
		echo"+++++++++++++++++++++".PHP_EOL;
	}
}

//create a new loop that outputs the average page length and year of publication of the books in the books array

//declare variables for average page length and average year
$averagePage = 0;
$averageYear = 0;

foreach ($books as $key => $book){
	$averagePage += $book["pages"];
	$averageYear += $book["published"];
}
$averagePage = $averagePage/4;
$averageYear = round($averageYear/4);
echo "The average page length of each book is {$averagePage}".PHP_EOL;
echo "The average year published of each book is {$averageYear}".PHP_EOL;