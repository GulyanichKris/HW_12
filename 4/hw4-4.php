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

/* echo "Foreach: \n";

foreach ($users as $x) {
    echo$x['name'] . '=' . $x['age'] . "\n";
echo $users[$i]['name'] . "=" . $users[$i]['age'] .  "\n"
} */
echo "Foreach: \n";

$reverse = [];
for ($i = 5; $i >= 0; $i = $i - 1) {
    $reverse[] = $users[$i]['age'] . "\n";
}

//echo $users[$i]['age'] . "\n";

foreach ($reverse as $v)
{
    echo $v;
}
