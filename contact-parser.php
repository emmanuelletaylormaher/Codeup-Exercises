<?php

function parseContacts($filename)
{
    $contacts = array();
    // todo - read file and parse contacts
    $filename = "contacts.txt";
    $handle = fopen($filename, "r");
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);

    foreach ($contacts as $key => $contact) {
    	$result = explode("|", $contact);
    	$contacts[$key] = [];
    	$input = $result[1];
    	$result[1] = reformatNumber($input);
    	$contacts[$key]["name"] = $result[0];
    	$contacts[$key]["number"] = $result[1];

    
    }

    return $contacts;
    fclose($handle);
}

var_dump(parseContacts('contacts.txt'));



// $test = "2106073202";

function reformatNumber($input){
	$first = substr($input,0,3)."-";
	$second = substr($input, 3, 3)."-";
	$third = substr($input, 6,4).PHP_EOL;
	return $first.$second.$third;

}

// reformatNumber($test);
