<?php

/* Напиши свою функцию, которая определит кол-во элементов в массиве.

Возьми за основу массив из прошлого занятия (с пользователями и их возрастом). */

$users = [
    ['name' => 'Vasilij', 'age' => 18],
    ['name' => 'Piter', 'age' => 12],
    ['name' => 'Kvazimodo', 'age' => 11],
    ['name' => 'Triniti', 'age' => 20],
    ['name' => 'Miha', 'age' => 38],
];

function countMembers ($a){
    $counter = 0;
    foreach ($a as $v){
        $counter=$counter+1;
    }
    return $counter;
}

//$n = count($users);
//echo count($users) . "\n";

echo "Number of members" . " = " . countMembers($users) . "\n";

/* Выведите список пользователей, используя цикл for, где вам необходимо вывести — имя, возраст, длинна имени. К примеру - "Александр, 11, длинна имени — 9 символов".
Для определения длинны строки, используйте функцию strlen (смотрите в разделе теории, функции для работы со строками). */

for($i=0;$i<countMembers($users);$i++){
    echo $users[$i]['name'] . ", " . $users[$i]['age'] . ", " . "длинна имени - " . strlen($users[$i]['name']) .  "\n";
}