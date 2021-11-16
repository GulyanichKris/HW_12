<?php
/* 1) Сделай текстовый файл, со следующим содержимым

Имя;Фамилия;Возраст;Пол
Александр;Петров;12;Мужской
Иван;Иванов;14;Мужской
Петр;Петрович;20;Мужской
Ольга;Петровна;24;Женсикй
Ирина;Олегович;24;Женсикй
Анна;Хакин;10;Женсикй
Михаил;Круг;19;Мужской
Джон;Браун;39;Мужской

2)Напиши программу, используя максимум полученных знаний,
которая сможет вывести данные из этого файла в виде красивой таблицы
(аналогично как из прошлого занятия).  */

$a = 'Name;Surname;Age;Sex
Alexandr;Petrov;12;Male
Ivan;Ivanov;14;Male
Petro;Petrovich;20;Male
Olga;Petrovna;24;Female
Irina;Olegovich;24;Female
Anna;Khakin;10;Female
Michael;Circle;19;Male
John;Brown;39;Male';

// превращаем текст в файл
file_put_contents('1.txt', $a);

// строку -> массив

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
/* Измеряем размер всех имен и фамилий. */

$maxLengthName=0;

foreach ($users as $user){
    if (strlen($user['name'])>$maxLengthName){
        $maxLengthName=strlen($user['name']);
    }
}

//echo $maxLengthName . "\n";

$maxLengthSurname = 0;

foreach ($users as $user){
    if (strlen($user['Surname'])>$maxLengthSurname){
        $maxLengthSurname=strlen($user['Surname']);
    }
}

//echo $maxLengthSurname . "\n";

/*Усложнение №1. Не выводи людей с возрастом меньше 14 */

echo str_repeat("_", 35) . "\n";

$Na = $users[0]['name'];
$Su = $users[0]['Surname'];
$Ag = $users[0]['age'];
$Se = $users[0]['sex'];

echo sprintf("|% ". $maxLengthName ."s|% ". $maxLengthSurname ."s| %3s |%7s| \n", $Na, $Su,$Ag,$Se);
echo str_repeat("=", 35) . "\n";

for ($i = 0; $i < count($users); $i = $i + 1) {
    $name = $users[$i]['name'];
    $surname = $users[$i]['Surname'];
    $age = $users[$i]['age'];
    $sex = $users[$i]['sex'];
    if ($users[$i]['age'] > 0){
    echo sprintf("|% ". $maxLengthName ."s|% ". $maxLengthSurname ."s|  %d |%7s| \n", $name, $surname,$age,$sex);
}
}

/*Усложнение №1. Не выводи людей с возрастом меньше 14
for ($i = 0; $i < count($users); $i = $i + 1) {
    $name = $users[$i]['name'];
    $surname = $users[$i]['Surname'];
    $age = $users[$i]['age'];
    $sex = $users[$i]['sex'];
    if ($users[$i]['age'] > 14){
        echo sprintf("|% ". $maxLengthName ."s|% ". $maxLengthSurname ."s|  %d |%7s| \n", $name, $surname,$age,$sex);
    }
}
*/

echo str_repeat("_", 35) . "\n";



/* Усложнение №2. Добавь еще одну колонку, и выведи там совершеннолетний или нет, данный пользователь. */

//for ($i = 0; $i < count($users); $i = $i + 1) {
//    $name = $users[$i]['name'];
//    $surname = $users[$i]['Surname'];
//    $age = $users[$i]['age'];
//    $sex = $users[$i]['sex'];
//    if ($users[$i]['age'] >= 18){
//        $adult = '+';
//} else {
//        $adult = '-';
//        echo sprintf("|% ". $maxLengthName ."s|% ". $maxLengthSurname ."s|  %d |%7s| %s | \n", $name, $surname,$age,$sex,$adult);
//    }
//}
