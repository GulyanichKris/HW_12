<?php
/* Взять за основу, массив с пользователями из прошлого задания.

Вывести список пользователей в обратном порядке, также с именем и возрастом.*/

$users = [
    ['name' => 'Alex', 'age' => 18],
    ['name' => 'Mike', 'age' => 12],
    ['name' => 'Oleg', 'age' => 11],
    ['name' => 'Paul', 'age' => 20],
    ['name' => 'Smith', 'age' => 38],
];


/* №1, Сделать задачу используя все виды циклов (for/foreach/while/do-while).
 Для вывода в обратном порядке с foreach, необходимо создать массив в обратном порядке (используя другой цикл заранее),
т.е. надо перевернуть массив. */

echo "While: \n";

$i = 4;
while ($i >= 0) {
    echo $users[$i]['name'] . "=" . $users[$i]['age'] . "\n";
    $i = $i - 1;
}