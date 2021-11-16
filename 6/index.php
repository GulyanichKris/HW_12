<?php

$users = [
    ['name' => 'Alexander', 'age' => 10],
    ['name' => 'Ivanov', 'age' => 11],
    ['name' => 'John Doe', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];

function myCount(array $a, ?string $s = '') {
    $counter = 0;
    foreach ($a as $v) {
        // $counter = $counter + 1;
        $counter++;
    }
    return $counter;
}

function printUsers($list)
{
    for ($i = 0; $i < myCount($list); $i++) {
        echo $list[$i]['name'] . ", length - " . strlen($list[$i]['name']) . "\n";
    }
}


//
//
//$nCount = count($users);
//$nMyCount = myCount($users);
//
//echo 'N count: ' . $nCount . "\n";
//echo 'N nMyCount: ' . $nMyCount . "\n";
//
//

printUsers($users);


