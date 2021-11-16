<?php

//№2, Вывести сумму возрастов первого и последнего в списке пользователя.

$users = [
    ['name' => 'Alex', 'age' => 18],
    ['name' => 'Mike', 'age' => 12],
    ['name' => 'Oleg', 'age' => 11],
    ['name' => 'Paul', 'age' => 20],
    ['name' => 'Smith', 'age' => 38],
];

echo 'SUM' . "=" .  ($users[0]['age'] + $users[4]['age']) . "\n";