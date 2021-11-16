<?php
/* надо вывести возраст самого взрослого пользователя, и количество пользователей всего.*/

$a = 'Name;Surname;Age;Sex
Alexandr;Petrov;12;Male
Ivan;Ivanov;14;Male
Petro;Petrovich;20;Male
Olga;Petrovna;24;Female
Irina;Olegovich;24;Female
Anna;Khakin;10;Female
Michael;Circle;19;Male
John;Brown;39;Male';


file_put_contents('1.txt', $a);

// строку -> массив

// превращаем текст в файл
$b = explode ("\n", $a);
$users = [];

foreach ($b as $v) {
    $user=explode(';', $v);
    $x=['name' => $user[0],
        'Surname' => $user[1],
        'age' => $user[2],
        'sex' => $user[3]];
    $users[]=$x;

}
//var_dump($users);

/* Поиск самого взрослого юзера. */

$maxAge=0;

foreach ($users as $user){
    if ($user['age']>$maxAge){
        $maxAge=$user['age'];
    }
}

$f = count($users);

echo '<strong>Возраст самого взрослого: </strong>' . "<i>$maxAge</i>" . "\n";
echo '<br/>';
//количество юзеров в массиве

echo '<strong>Всего пользователей: </strong>' . "<i>$f</i>" . "\n";

// php -S localhost:9090 запуск сервера

// Дорога к файлу http://localhost:9090/hw8-2.php