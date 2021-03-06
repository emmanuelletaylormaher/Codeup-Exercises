<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

// Add code to output the $companies array in its current form.

// print_r($companies);

// Sort the $companies array by company name and output the results.

// ksort($companies);
// print_r($companies);

// Sort the people in each company alphabetically. You will need to use a foreach loop and will need to reassign each inner array after sorting. Output the result.

foreach ($companies as $key => $company) {
    asort($company);

    $companies[$key] = $company;
    $sorted = $company;
    $companies[$key] = $sorted;
}
print_r($companies);

// Sort the companies from "biggest" to "smallest". This may be easier than you think, but be sure you don't loose the company names!

// foreach ($companies as $key => $company) {
//     $companySize = count($company);
//     echo "{$key} => {$companySize}".PHP_EOL;
// }
// arsort($companies);
// print_r($companies);
