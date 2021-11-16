<?php
/* Взять за основу, массив с пользователями из прошлого задания.

Вывести список пользователей в обратном порядке, также с именем и возрастом.*/

function agutin($name, $age, $mood = '') {
    echo 'kto eto?' . "\n";
    echo $name. ' - ' . $age. $mood . "\n";
}

$users = [
    ['name' => 'Alex', 'age' => 18],
    ['name' => 'Mike', 'age' => 12],
    ['name' => 'Oleg', 'age' => 11],
    ['name' => 'Paul', 'age' => 20],
    ['name' => 'Smith', 'age' => 38],
];

for ($i = 4; $i >= 0; $i = $i - 1) {
    $name = $users[$i]['name'];
    $age = $users[$i]['age'];

    agutin($name, $age);
}

agutin ('Leonid', 53, ' xochet_v_otpusk');
